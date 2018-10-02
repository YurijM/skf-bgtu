<?php defined('SYSPATH') or die('No direct script access.');

class Model_Library extends Model {
	protected $_table_name = 'library';

	public function getEditedBy()
	{
		$query = DB::query(Database::SELECT,
			"SELECT DISTINCT CONCAT(
				REVERSE(
					LEFT(REVERSE(Author), POSITION('.' IN REVERSE(Author)) - 1)
				), ' ',
				REVERSE(
					SUBSTRING(
						REVERSE(
							SUBSTRING(Author, 9, 50)
						),
						POSITION('.' IN REVERSE(SUBSTRING(Author, 9, 50)))
					)
				)
			) AS author,
			SUBSTRING(Author, 9, 50) AS edited
			FROM library
			WHERE LEFT(Author, 8) = 'под ред. '
			ORDER BY REVERSE(LEFT(REVERSE(Author), POSITION('.' IN REVERSE(Author)) - 1))"
		);

		return $query->execute();
	}

	public function searchResult($author, $edited, $book, $keyword)
	{
		if ($author == '' && $edited == '' && $book == '' && $keyword == '')
			return null;

		$where = ($author ? 'authorfirstinitials LIKE "%' . $author . '%"' : '');
		$where = ($edited != '' ? ($where != '' ? $where . ' OR ' : '') . 'author LIKE "%' . $edited . '%"' : $where);
		$where = ($book != '' ? ($where != '' ? $where . ' OR ' : '') . 'book LIKE "%' . $book . '%"' : $where);
		$where = ($keyword != '' ? ($where != '' ? $where . ' OR ' : '') . 'keyword LIKE "%' . $keyword .	'%"' : $where);

		$query = DB::query(Database::SELECT,
			"SELECT * FROM library
			WHERE " . $where .
			" ORDER BY Author, Book"
		);

		return $query->execute();
	}
}