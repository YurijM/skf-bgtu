<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Literature extends Controller_Cabinet
{
	public $cabinet;
	public $literature;

	public function before()
	{
		parent::before();

		$this->cabinet = View::factory('cabinet/v_cabinet');
		$this->cabinet->kind = $this->user->kind;
		$this->cabinet->pageTitle = $this->pageTitle . ' - Учебные материалы';

		$this->literature = View::factory('cabinet/v_literature');
		$this->literature->kind = $this->user->kind;
		$this->literature->username = $this->user->username;
		$this->literature->userId = $this->user->id;

		$this->literature->addDoc = '';
		$this->literature->listFaculties = '';
		$this->literature->listLiterature = '';
	}

	public function action_index()
	{
		$this->literature->listFaculties = View::factory('cabinet/v_faculties');

		$this->literature->listFaculties->faculties_higher = DB::select(
			'f.id',
			'f.faculty',
			['count("l.id")', 'count'])
			->from(['faculties', 'f'])
			->join(['literature', 'l'], 'LEFT')
			->on('l.faculty_id', '=', 'f.id')
			->where('f.type_spec', '=', 0)
			->group_by('f.id', 'f.faculty')
			->order_by('f.faculty')
			->execute();

		$this->literature->listFaculties->faculties_specialty = DB::select(
			'f.id',
			'f.faculty',
			['count("l.id")', 'count'])
			->from(['faculties', 'f'])
			->join(['literature', 'l'], 'LEFT')
			->on('l.faculty_id', '=', 'f.id')
			->where('f.type_spec', '=', 1)
			->group_by('f.id', 'f.faculty')
			->order_by('f.faculty')
			->execute();

		$facultyId = $this->request->param('id');
		$subjectId = $this->request->param('add_id');

		if ($facultyId && !$subjectId) {
			$this->literature->listLiterature = View::factory('cabinet/v_literature_by_faculty');
			$this->literature->listLiterature->faculty = ORM::factory('faculty', $facultyId)->faculty;
			$this->literature->listLiterature->facultyId = $facultyId;
			$this->literature->listLiterature->subjects = DB::select(['s.id', 'subject_id'], 's.subject', array('count("subject_id")', 'count'))
				->from(array('literature', 'l'))
				->join(array('subjects_cabinet', 's'), 'INNER')
				->on('s.id', '=', 'l.subject_id')
				->where('l.faculty_id', '=', $facultyId)
				->group_by('s.subject')
				->order_by('s.subject')
				->execute();
		}
		if ($facultyId && $subjectId) {
			$this->literature->listLiterature = View::factory('cabinet/v_literature_by_subject');

			$this->literature->listLiterature->faculty = ORM::factory('faculty', $facultyId)->faculty;
			$this->literature->listLiterature->subject = ORM::factory('subjectscabinet', $subjectId)->subject;

			// В этом запросе есть связь с преподавателем
			/*$this->literature->listLiterature->books = DB::select('l.id', 'l.faculty_id', 'l.subject_id', 'l.title', 't.person')
				->from(['literature', 'l'])
				->join(['teachers', 't'], 'INNER')
				->on('t.id', '=', 'l.teacher_id')
				->where('l.faculty_id', '=', $facultyId)
				->and_where('l.subject_id', '=', $subjectId)
				->order_by('l.title')
				->execute();*/
			$this->literature->listLiterature->books = DB::select('l.id', 'l.faculty_id', 'l.subject_id', 'l.title')
				->from(['literature', 'l'])
				->where('l.faculty_id', '=', $facultyId)
				->and_where('l.subject_id', '=', $subjectId)
				->order_by('l.title')
				->execute();

			$this->literature->listLiterature->no = 1;
			$this->literature->listLiterature->kind = $this->literature->kind;
			$this->literature->listLiterature->username = $this->literature->username;
			$this->literature->listLiterature->dirDoc = ORM::factory('setting', array('key' => 'dir_docs_literature'))->value;
		}

		$this->cabinet->cabinet = $this->literature;
		$this->template->main = $this->cabinet;
	}

	//==========================================================================//
	public function action_adddoc()
	{
		$id = $this->request->param('id');

		$this->literature->kind = 0;

		$this->literature->addDoc = View::factory('cabinet/v_adddoc');

		$this->literature->addDoc->faculties = ORM::factory('faculty')
			->order_by('faculty')
			->find_all();

		$this->literature->addDoc->dir_js = $this->dirJs;
		$this->literature->addDoc->dir_css = $this->dirCss;

		if ($id) {
			$literature = ORM::factory('literature', $id);
			$this->literature->addDoc->facultyId = $literature->faculty_id;
			$this->literature->addDoc->subjectId = $literature->subject_id;
			$this->literature->addDoc->title = $literature->title;
			$this->literature->addDoc->teacher_id = $literature->teacher_id;
			$this->literature->addDoc->file = $id . '.pdf';
		} else {
			$this->literature->addDoc->facultyId = 0;
			$this->literature->addDoc->subjectId = 0;
			$this->literature->addDoc->title = '';
			$this->literature->addDoc->file = '';
		}

		$hasError = false;

		$this->literature->addDoc->errorFaculty = '';
		$this->literature->addDoc->errorSubject = '';
		$this->literature->addDoc->errorTitle = '';
		$this->literature->addDoc->errorFile = '';

		$this->literature->addDoc->id = $id;

		$messageNotEmpty = 'поле обязательно должно быть заполнено';

		$post = $this->request->post();

		if (count($post) > 0) {
			$literature = ($id ? ORM::factory('literature', $id) : ORM::factory('literature'));

			$literature->faculty_id = $post['faculty'];
			$literature->subject_id = $post['subject'];
			$literature->title = trim($post['title']);

			if ($literature->faculty_id == 0) {
				$hasError = true;
				$this->literature->addDoc->errorFaculty = $messageNotEmpty;
			}

			if ($literature->subject_id == 0) {
				$hasError = true;
				$this->literature->addDoc->errorSubject = $messageNotEmpty;
			}

			if (!$literature->title) {
				$hasError = true;
				$this->literature->addDoc->errorTitle = $messageNotEmpty;
			}

			if ((!$id) && (!$_FILES['file']['tmp_name'])) {
				$hasError = true;
				$this->literature->addDoc->errorFile = 'файл не выбран';
			}

			if (!$hasError) {
				// Если это новый документ, то будет сохранен идентификатор владельца кабинета.
				// Если же запись редактировалась, то будет сохранен идентификатор преподавателя,
				// который первоначально загрузил документ на сервер.
				$literature->teacher_id = ($id ? $this->literature->addDoc->teacher_id : $this->literature->userId);

				if ($literature->save() && (!$id)) {
					// Путь к каталогу (без первого символа '/').
					$dir = substr(ORM::factory('setting', array('key' => 'dir_docs_literature'))->value, 1);

					move_uploaded_file($_FILES['file']['tmp_name'], $dir . $literature->id . '.pdf');
				}

				$this->request->redirect('cabinet/literature/index/' . $literature->faculty_id . '/' . $literature->subject_id);
			} else {
				$this->literature->addDoc->facultyId = $literature->faculty_id;
				$this->literature->addDoc->subjectId = $literature->subject_id;
				$this->literature->addDoc->title = $literature->title;
				//$this->literature->addDoc->file = $_FILES['file']['name'];
			}
		}

		$this->cabinet->cabinet = $this->literature;
		$this->template->main = $this->cabinet;
	}

	//==========================================================================//
	public function action_loadliteraturebyfaculty()
	{
		$facultyId = $this->request->post('id');

		$data['facultyId'] = $facultyId;
		$data['faculty'] = ORM::factory('faculty', $facultyId)->faculty;

		$data['subjects'] = DB::select(['s.id', 'subject_id'], 's.subject', ['count("subject_id")', 'count'])
			->from(array('literature', 'l'))
			->join(array('subjects_cabinet', 's'), 'INNER')
			->on('s.id', '=', 'l.subject_id')
			->where('l.faculty_id', '=', $facultyId)
			->group_by('s.subject')
			->order_by('s.subject')
			->execute();

		exit(View::factory('cabinet/v_literature_by_faculty', $data));
	}

	//==========================================================================//
	public function action_loadliteraturebysubject()
	{
		$facultyId = $this->request->post('facultyId');
		$subjectId = $this->request->post('subjectId');

		$data['faculty'] = ORM::factory('faculty', $facultyId)->faculty;
		$data['subject'] = ORM::factory('subjectscabinet', $subjectId)->subject;

		// В этом запросе есть связь с преподавателем
		/*$data['books'] = DB::select('l.id', 'l.faculty_id', 'l.subject_id', 'l.title', 't.person')
			->from(['literature', 'l'])
			->join(['teachers', 't'], 'INNER')
			->on('t.id', '=', 'l.teacher_id')
			->where('l.faculty_id', '=', $facultyId)
			->and_where('l.subject_id', '=', $subjectId)
			->order_by('l.title')
			->execute();*/
		$data['books'] = DB::select('l.id', 'l.faculty_id', 'l.subject_id', 'l.title')
			->from(['literature', 'l'])
			->where('l.faculty_id', '=', $facultyId)
			->and_where('l.subject_id', '=', $subjectId)
			->order_by('l.title')
			->execute();

		$data['no'] = 1;
		$data['kind'] = $this->literature->kind;
		$data['username'] = $this->literature->username;
		$data['dirDoc'] = ORM::factory('setting', array('key' => 'dir_docs_literature'))->value;

		exit(View::factory('cabinet/v_literature_by_subject', $data));
	}

	//==========================================================================//
	public function action_loadsubjectsbyfaculty()
	{
		$facultyId = $this->request->post('faculty_id');

		$data['subjectId'] = $this->request->post('subject_id');

		$data['subjects'] = ORM::factory('faculty', $facultyId)
			->subjects
			->order_by('subject')
			->find_all();

		exit(View::factory('cabinet/v_subjects_by_faculty', $data));
	}

	//==========================================================================//
	public function action_deletedoc()
	{
		$id = $this->request->post('id');

		$doc = ORM::factory('literature', $id);

		$doc->delete();
		// У пути убираем первый символ слэш '/'
		$dir = substr(ORM::factory('setting', array('key' => 'dir_docs_literature'))->value, 1);
		unlink($dir . $id . '.pdf');

		exit();
	}
}