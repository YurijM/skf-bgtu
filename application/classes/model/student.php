<?php defined('SYSPATH') or die('No direct script access.');

class Model_Student extends ORM
{
	public function getGroups()
	{
		return DB::select('s.group', 's.faculty')
			->from(['students', 's'])
			->group_by('s.group', 's.faculty')
			->order_by('s.group')
			->execute();

	}
}