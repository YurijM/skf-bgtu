<?php defined('SYSPATH') or die('No direct script access.');

class Model_Student extends ORM
{
	public function getGroups()
	{
		return DB::select('s.group')
			->from(['students', 's'])
			->group_by('s.group')
			->order_by('s.group')
			->execute();

	}
}