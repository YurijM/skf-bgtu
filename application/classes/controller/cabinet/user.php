<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cabinet_User extends Controller_Cabinet
{
	public function action_sendmessage()
	{
		$message = Arr::get($_POST, 'Message');
		if ($message['id'] > 0) {
			$model = ORM::factory('message', $message['id']);
		} else {
			$model = ORM::factory('message');
			$model->date_send = time();
		}

		$message['message'] = nl2br($message['message'], false);

		$model->from_id = $message['idFrom'];
		$model->to_id = $message['idTo'];
		$model->message = $message['message'];

		$model->save();
	}

	public function action_sendgroup()
	{
		$message = Arr::get($_POST, 'Message');
		$message['message'] = nl2br($message['message'], false);

		$students = ORM::factory('student')
			->where('group', '=', $message['idTo'])
			->find_all();

		foreach ($students as $student) {
			$model = ORM::factory('message');
			$model->from_id = $message['idFrom'];
			$model->to_id = $student->id;
			$model->message = $message['message'];
			$model->date_send = time();

			$model->save();
		}
	}

	public function action_loadmessages($range = null)
	{
		if (!$range)
			$range = Arr::get($_POST, 'range');

		/*$log = (CommentLog::findOne(['gambler_id' => Yii::$app->user->id]) ? : new CommentLog());

		$log->gambler_id = ($log->gambler_id ? : Yii::$app->user->id);
		$log->connected_at = time();

		$log->save();

		$log = CommentLog::find()
			->joinWith('gambler')
			->where('connected_at >= :time')
			->andWhere('gambler_id != :gambler_id')
			->params(['time' => time() - 60 * self::LACK_TIME, 'gambler_id' => $log->gambler_id])
			->orderBy(['user.last_name' => SORT_ASC, 'user.first_name' => SORT_ASC])
			->all();

		return $this->renderAjax('load', compact('comments', 'log'));*/

		$data['messages'] = ORM::factory('message')->getMessages($this->user->id, $range);
		$data['userId'] = $this->user->id;
		$data['dirImg'] = $this->dirImg;

		exit(View::factory('cabinet/v_messages', $data));
	}

	public function action_editmessage()
	{
		$message = ORM::factory('message', Arr::get($_POST, 'id'));

		exit($message->message);
	}

	public function action_deletemessage()
	{
		$id = Arr::get($_POST, 'id');
		ORM::factory('message', $id)->delete();

		exit('deleted');
	}

}
