<?php defined('SYSPATH') or die('No direct script access.');

class Model_Message extends ORM {
	public function getMessages($userId, $range = -1)
	{
		if ($range != -1 && $range != -7) {
			$day[0] = 0;
		} else {
			$today = getdate(time());
			$today = mktime(0, 0, 0, $today['mon'], $today['mday'], $today['year']);
			$day = getdate($today + ($range) * 60 * 60 * 24);
		}

		/*return DB::select('m.message', 'm.date_send',
			['sfrom.person', 'student_from'],
			['sto.person', 'student_to'],
			['tfrom.teacher', 'teacher_from'],
			['tto.teacher', 'teacher_to'])
			->from(['messages', 'm'])
			->join(['students', 'sfrom'], 'LEFT')->on('sfrom.id', '=', 'm.from_id')
			->join(['students', 'sto'], 'LEFT')->on('sto.id', '=', 'm.to_id')
			->join(['teachers', 'tfrom'], 'LEFT')->on('tfrom.id', '=', 'm.from_id')
			->join(['teachers', 'tto'], 'LEFT')->on('tto.id', '=', 'm.to_id')
			->where('date_send', '>=', $day[0])
			->and_where_open()
			->where('m.from_id', '=', $userId)
			->or_where('m.to_id', '=', $userId)
			->and_where_close()
			->order_by('m.date_send')
			->execute();*/
		return DB::query(Database::SELECT, 'SELECT m.id, m.message, m.date_send, '
			. 'COALESCE(sfrom.id, tfrom.id) id_from, '
			. 'COALESCE(sto.id, tto.id) id_to, '
			. 'COALESCE(sfrom.person, tfrom.person) user_from, '
			. 'COALESCE(sto.person, tto.person) user_to '
			. 'FROM messages m '
			. 'LEFT JOIN students sfrom ON sfrom.id = m.from_id '
			. 'LEFT JOIN students sto ON sto.id = m.to_id '
			. 'LEFT JOIN teachers tfrom ON tfrom.id = m.from_id '
			. 'LEFT JOIN teachers tto ON tto.id = m.to_id '
			. 'WHERE date_send >= ' . $day[0]
			. ' AND (m.from_id = ' . $userId . ' OR m.to_id = ' . $userId . ') '
			. ' AND ('
			. '((sfrom.id IS NOT NULL) AND (tto.id IS NOT NULL))'
			. ' OR ((tfrom.id IS NOT NULL) AND (sto.id IS NOT	NULL))'
			. ')'
			. 'ORDER BY m.date_send'
		)->execute();
	}
}