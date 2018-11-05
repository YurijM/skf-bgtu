<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studentachievements extends Controller_Admin
{
	private $page_title = 'Достижения студентов';
	private $table;

	//==========================================================================//
	public function before()
	{
		parent::before();

		$this->template->page_title = $this->page_title;
		$this->table = ORM::factory('studentachievements')->table_name();
	}

	//==========================================================================//
	public function action_index()
	{
		$achievements = View::factory('admin/v_student_achievements_list');
		//$achievements->$achievements = ORM::factory('studentachievements')->order_by('order_no')->find_all();

		$achievements->achievements = DB::select('a.id', 'a.student_id', 's.person', 'a.description')
			->from(['student_achievements', 'a'])
			->join(['students', 's'], 'INNER')
			->on('s.id', '=', 'a.student_id')
			->order_by('s.person')
			->order_by('a.description')
			->execute();

		$achievements->page_title = $this->page_title;
		$achievements->table = $this->table;

		$this->template->main = $achievements;
	}

	//==========================================================================//
	public function action_edit()
	{
		$id = $this->request->param('id');

		$achievements = View::factory('admin/v_student_achievements');
		$achievements->dir_js = $this->dir_js;
		$achievements->dir_css = $this->dir_css;
		$achievements->page_title = $this->page_title;
		$achievements->table = $this->table;
		$achievements->students = ORM::factory('student')->order_by('person')->find_all()->as_array();
		$achievements->file = '';


		if ($id) {
			$achievements->achievement = ORM::factory('studentachievements', $id);
			$achievements->confirmation_delete = $this->widget_load(
				$this->widgets_folder . 'confirmationdelete/' . str_replace(['.', ','],
					' ', $achievements->achievement->description));
		} else {
			$achievements->achievement = ORM::factory('studentachievements');
		}

		$this->template->main = $achievements;
	}

	//==========================================================================//
	public function action_save()
	{
		$id = Arr::get($_POST, 'id');
		$student_id = Arr::get($_POST, 'student_id');
		$description = trim(Arr::get($_POST, 'description'));

		// Путь к каталогу (без первого символа '/').
		$dir = substr(ORM::factory('setting', ['key' => 'dir_docs_student_achievements'])->value, 1);

		if ($id > 0) {
			$achievement = ORM::factory('studentachievements', $id);

			//--------------------- Нажата кнопка "Удалить" -------------------------//
			if (isset($_POST['delete'])) {
				$fileName = $dir . $achievement->student_id . '-' . $id . '.pdf';
				$achievement->delete();
				unlink($fileName);

				$this->request->redirect('admin/studentachievements');
			}
		} else {
			$achievement = ORM::factory('studentachievements');
		}

		$oldStudentId = $achievement->student_id;

		$achievement->student_id = $student_id;
		$achievement->description = $description;

		if ($achievement->save()) {
			$fileName = $dir . $achievement->student_id . '-' . $achievement->id . '.pdf';
			if (!$id) {
				move_uploaded_file($_FILES['file']['tmp_name'], $fileName);
			} elseif ($oldStudentId != $achievement->student_id) {
				$oldFileName = $dir . $oldStudentId . '-' . $achievement->id . '.pdf';
				rename($oldFileName, $fileName);
			}
		}

		$this->request->redirect('admin/studentachievements');
	}
}
