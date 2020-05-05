<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_Distance extends Controller_Cabinet
{
	public $cabinet;
	public $distance;

	public function before()
	{
		parent::before();

		$this->cabinet = View::factory('cabinet/v_cabinet');
		$this->cabinet->kind = $this->user->kind;
		$this->cabinet->pageTitle = $this->pageTitle . ' - Дистанционное обучение';

		$this->distance = View::factory('cabinet/v_distance');
		$this->distance->kind = $this->user->kind;
		$this->distance->username = $this->user->username;
		$this->distance->userId = $this->user->id;

		$this->distance->addLesson = '';
		$this->distance->listGroups = '';
	}

	//==========================================================================//
	public function action_index()
	{
		$this->distance->listGroups = View::factory('cabinet/v_groups');
		/*$query = 'SELECT `group`'
			. ' FROM students WHERE SUBSTRING(`group`, 1, 1) != \'З\''
			. ' GROUP BY `group`'
			. ' ORDER BY `group`';
		$this->distance->listGroups->groups = DB::query(Database::SELECT, $query)->execute()->as_array();*/

		/*$groups = ORM::factory('student')
			->group_by('group')
			->order_by('group')
			->find_all()
			->as_array('group', 'group');

		foreach ($groups as $key => $value) {
			if (mb_substr($value, 0, 1) === 'З') {
				unset($groups[$key]);
			}
		}*/

		if ($this->distance->kind == 0) {
			$this->distance->listGroups->group = ORM::factory('student', $this->distance->userId)->group;
		} else {
			$this->distance->listGroups->group = '';

			$this->distance->listGroups->groups = ORM::factory('student')
				->select('group')
				->group_by('group')
				->order_by('group')
				->find_all();
		}

		$this->distance->listGroups->kind = $this->distance->kind;

		$this->cabinet->cabinet = $this->distance;
		$this->template->main = $this->cabinet;
	}

	//==========================================================================//
	public function action_addlesson()
	{
		$id = $this->request->param('id');

		$this->distance->kind = 0;

		$this->distance->addLesson = View::factory('cabinet/v_addlesson');

		$this->distance->addLesson->groups = ORM::factory('student')
			->select('group')
			->group_by('group')
			->order_by('group')
			->find_all();

		$this->distance->addLesson->faculties = ORM::factory('faculty')
			->order_by('faculty')
			->find_all();

		$this->distance->addLesson->types = [
			'Лекция',
			'Практическое занятие',
			'Лабораторное занятие'
		];

		$this->distance->addLesson->teachers = ORM::factory('teacher')
			->order_by('person')
			->find_all();


		$this->distance->addLesson->dir_js = $this->dirJs;
		$this->distance->addLesson->dir_css = $this->dirCss;

		if ($id) {
			$lesson = ORM::factory('distance', $id);
			$this->distance->addLesson->dateLesson = Helper_Addfunction::date_from_mysql($lesson->date_lesson);
			$this->distance->addLesson->group = $lesson->group;
			$this->distance->addLesson->couple = $lesson->couple;
			$this->distance->addLesson->facultyId = $lesson->faculty_id;
			$this->distance->addLesson->subjectId = $lesson->subject_id;
			$this->distance->addLesson->theme = $lesson->theme;
			$this->distance->addLesson->type = $lesson->type;
			$this->distance->addLesson->teacherId = $lesson->teacher_id;
			$this->distance->addLesson->file = $id . '.pdf';
		} else {
			$this->distance->addLesson->dateLesson = date('d.m.Y');
			$this->distance->addLesson->group = '';
			$this->distance->addLesson->couple = 1;
			$this->distance->addLesson->teacherId = 0;
			$this->distance->addLesson->facultyId = 0;
			$this->distance->addLesson->subjectId = 0;
			$this->distance->addLesson->theme = '';
			$this->distance->addLesson->type = '';
			$this->distance->addLesson->file = '';
		}

		$hasError = false;

		$this->distance->addLesson->errorGroup = '';
		$this->distance->addLesson->errorTeacher = '';
		$this->distance->addLesson->errorFaculty = '';
		$this->distance->addLesson->errorSubject = '';
		$this->distance->addLesson->errorTheme = '';
		$this->distance->addLesson->errorType = '';
		$this->distance->addLesson->errorFile = '';

		$this->distance->addLesson->id = $id;

		$messageNotEmpty = 'поле обязательно должно быть заполнено';

		$post = $this->request->post();

		if (count($post) > 0) {
			$distance = ($id ? ORM::factory('distance', $id) : ORM::factory('distance'));

			$distance->date_lesson = Helper_Addfunction::date_to_mysql($post['dateLesson']);
			$distance->group = $post['group'];
			$distance->couple = $post['couple'];
			$distance->teacher_id = $post['teacher'];
			$distance->faculty_id = $post['faculty'];
			$distance->subject_id = $post['subject'];
			$distance->theme = trim($post['theme']);
			$distance->type = $post['type'];


			if ($distance->group == '') {
				$hasError = true;
				$this->distance->addLesson->errorGroup = $messageNotEmpty;
			}

			if ($distance->teacher_id == 0) {
				$hasError = true;
				$this->distance->addLesson->errorTeacher = $messageNotEmpty;
			}

			if ($distance->faculty_id == 0) {
				$hasError = true;
				$this->distance->addLesson->errorFaculty = $messageNotEmpty;
			}

			if ($distance->subject_id == 0) {
				$hasError = true;
				$this->distance->addLesson->errorSubject = $messageNotEmpty;
			}

			if (!$distance->theme) {
				$hasError = true;
				$this->distance->addLesson->errorTheme = $messageNotEmpty;
			}

			if (!$distance->type) {
				$hasError = true;
				$this->distance->addLesson->errorType = $messageNotEmpty;
			}

			if ((!$id) && (!$_FILES['file']['tmp_name'])) {
				$hasError = true;
				$this->distance->addLesson->errorFile = 'файл не выбран';
			}

			if (!$hasError) {
				if ($distance->save() && (!$id)) {
					// Путь к каталогу (без первого символа '/').
					$dir = substr(ORM::factory('setting', array('key' => 'dir_docs_distance'))->value, 1);

					move_uploaded_file($_FILES['file']['tmp_name'], $dir . $distance->id . '.pdf');
				}

				//$this->request->redirect('cabinet/distance');
				//echo "<script>loadLessonsByGroup('" . $distance->group . "');</script>";
			} else {
				$this->distance->addLesson->dateLesson = Helper_Addfunction::date_from_mysql($distance->date_lesson);
				$this->distance->addLesson->group = $distance->group;
				$this->distance->addLesson->couple = $distance->couple;
				$this->distance->addLesson->teacherId = $distance->teacher_id;
				$this->distance->addLesson->facultyId = $distance->faculty_id;
				$this->distance->addLesson->subjectId = $distance->subject_id;
				$this->distance->addLesson->theme = $distance->theme;
				$this->distance->addLesson->type = $distance->type;
				//$this->distance->addLesson->file = $_FILES['file']['name'];
			}
		}

		$this->cabinet->cabinet = $this->distance;
		$this->template->main = $this->cabinet;
	}

	//==========================================================================//
	public function action_loadlessonsbygroup()
	{
		//$group = Arr::get($_GET, 'group');
		$group = $this->request->post('group');

		$data['lessons'] = DB::select('d.id', 'd.date_lesson', 'd.couple', 'd.subject_id', 's.subject', 'd.theme', 'd.type', 't.person')
			->from(['distance', 'd'])
			->join(['subjects_cabinet', 's'], 'INNER')
			->on('s.id', '=', 'd.subject_id')
			->join(['teachers', 't'], 'INNER')
			->on('t.id', '=', 'd.teacher_id')
			->where('d.group', '=', $group)
			->order_by('date_lesson', 'desc')
			->order_by('couple', 'asc')
			->execute();

		/*$data['noLessons'] = '';
		if (count($data['lessons']) == 0) {
			$data['noLessons'] = 'Занятий нет';
		}*/

		$data['date'] = '';
		$data['group'] = $group;
		$data['username'] = $this->distance->username;
		$data['dirDoc'] = ORM::factory('setting', array('key' => 'dir_docs_distance'))->value;

		exit(View::factory('cabinet/v_lessons_by_group', $data));
	}

	//==========================================================================//
	public function action_deletelesson()
	{
		$id = $this->request->post('id');

		$doc = ORM::factory('distance', $id);

		$doc->delete();
		// У пути убираем первый символ слэш '/'
		$dir = substr(ORM::factory('setting', array('key' => 'dir_docs_distance'))->value, 1);
		unlink($dir . $id . '.pdf');

		exit();
	}
}