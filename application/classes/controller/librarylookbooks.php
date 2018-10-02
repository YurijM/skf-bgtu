<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Librarylookbooks extends Controller_Base
{
	public function action_index()
	{
		$this->template->page_title = 'Поиск литературы';

		$search = View::factory('v_library_look_books');

		$search->mode = $this->mode;
		$search->page_title = $this->template->page_title;

		$search->authors = ORM::factory('libraryauthors')->find_all();
		$search->editeds = Model::factory('library')->getEditedBy();

		$search->author = $this->request->post('author');
		$search->edited = $this->request->post('edited');
		$search->book = $this->request->post('book');
		$search->keyword = $this->request->post('keyword');

		$search->result = Model::factory('library')->searchResult(
			$search->author,
			$search->edited,
			$search->book,
			$search->keyword
		);

		$this->template->main = $search;
	}
	public function action_search()
	{
		$author = $this->request->post('author');
		$edited = $this->request->post('edited');
		$book = $this->request->post('book');
		$keyword = $this->request->post('keyword');

		$data['result'] = Model::factory('library')->searchResult(
			$author,
			$edited,
			$book,
			$keyword
		);

		$data['amount'] = count($data['result']);
		$data['max_search_result'] = ORM::factory('setting', array('key' => 'max_count_search_books'))->value;

		exit(View::factory('v_library_look_books_result', $data));
	}
}