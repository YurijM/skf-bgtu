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

		$this->literature->addDoc = '';
		$this->literature->listFaculties = '';
		$this->literature->listLiterature = '';
	}

	public function action_index()
	{
		$this->literature->listFaculties = View::factory('cabinet/v_faculties');

		$this->literature->listFaculties->faculties = DB::select('f.id', 'f.faculty', ['count("l.id")', 'count'])
			->from(['faculties', 'f'])
			->join(['literature', 'l'], 'LEFT')
			->on('l.faculty_id', '=', 'f.id')
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
			$this->literature->listLiterature->books = ORM::factory('literature')
				->where('faculty_id', '=', $facultyId)
				->and_where('subject_id', '=', $subjectId)
				->order_by('title')
				->find_all();

			$this->literature->listLiterature->no = 1;
			$this->literature->listLiterature->kind = $this->literature->kind;
			$this->literature->listLiterature->dirDoc = ORM::factory('setting', array('key' => 'dir_docs_literature'))->value;



			/*$this->literature->listLiterature->faculty = ORM::factory('faculty', $facultyId)->faculty;
			$this->literature->listLiterature->facultyId = $facultyId;
			$this->literature->listLiterature->subjects = DB::select(['s.id', 'subject_id'], 's.subject', array('count("subject_id")', 'count'))
				->from(array('literature', 'l'))
				->join(array('subjects_cabinet', 's'), 'INNER')
				->on('s.id', '=', 'l.subject_id')
				->where('l.faculty_id', '=', $facultyId)
				->group_by('s.subject')
				->order_by('s.subject')
				->execute();*/
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

		/*$data['subjects'] = DB::query(
			Database::SELECT,
			'SELECT s.subject, count(subject_id) count '
			. 'FROM literature l '
			. 'INNER JOIN subjects_cabinet s ON s.id = l.subject_id '
			. 'WHERE faculty_id = ' . $facultyId
			. ' ORDER BY s.subject'
		)->execute();*/

		//var_dump($data['subjects']); die;
		//$data['subjects'] = $faculty->literature->find_all();
		//$data['subjects'] = $faculty->subjects->where('subject_id', 'in', [450, 153])->order_by('subject')->find_all();

		exit(View::factory('cabinet/v_literature_by_faculty', $data));
	}

	//==========================================================================//
	public function action_loadliteraturebysubject()
	{
		$facultyId = $this->request->post('facultyId');
		$subjectId = $this->request->post('subjectId');

		$data['faculty'] = ORM::factory('faculty', $facultyId)->faculty;
		$data['subject'] = ORM::factory('subjectscabinet', $subjectId)->subject;

		$data['books'] = ORM::factory('literature')
			->where('faculty_id', '=', $facultyId)
			->and_where('subject_id', '=', $subjectId)
			->order_by('title')
			->find_all();

		$data['no'] = 1;
		$data['kind'] = $this->literature->kind;
		$data['dirDoc'] = ORM::factory('setting', array('key' => 'dir_docs_literature'))->value;

		exit(View::factory('cabinet/v_literature_by_subject', $data));
	}

	//==========================================================================//
	public function action_loadsubjectsbyfaculty()
	{
		$facultyId = $this->request->post('faculty_id');

		$data['subjectId'] = $this->request->post('subject_id');
		//var_dump($facultyId); die;

		$data['subjects'] = ORM::factory('faculty', $facultyId)
			->subjects
			->order_by('subject')
			->find_all();

		exit(View::factory('cabinet/v_subjects_by_faculty', $data));
	}

	//==========================================================================//
	/*public function action_loaddoc()
	{
		$literature = ORM::factory('literature');

		$literature->faculty_id = Arr::get($_POST, 'faculty');
		$literature->subject_id = Arr::get($_POST, 'subject');
		$literature->title = trim(Arr::get($_POST, 'title'));

		$errors = [];

		if ($literature->facultyId == 0) {
			$errors['faculty'] = 'Не может быть пустым';
		}

		if ($literature->save()) {
			// Путь к каталогу (без первого символа '/').
			$dir = substr(ORM::factory('setting', array('key' => 'dir_docs_literature'))->value, 1);

			move_uploaded_file($_FILES['file']['tmp_name'], $dir . $literature->id . '.pdf');
		}

		$this->request->redirect('cabinet/literature/index/' . $literature->faculty_id);
	}*/

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