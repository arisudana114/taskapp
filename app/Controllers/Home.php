<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$model = new \App\Models\TitlesModel;
		$data = $model->findAll();
		$db = \Config\Database::connect();
		$query = $db->query('SELECT `titles`.`title`, `show_date`.`show_date`, `cinema`.`cinema_name`, `show_time`.`show_time`
		FROM `titles` INNER JOIN (`show_time` INNER JOIN (`show_date` INNER JOIN (`cinema` INNER JOIN `movies` ON `cinema`.`id` = `movies`.`cinema_id`) ON `show_date`.`id` = `movies`.`show_date_id`) ON `show_time`.`id` = `movies`.`show_time_id`) ON `titles`.`id` = `movies`.`titles_id`;
		');
		// $builder->join('titles', 'titles.id = movies.titles_id');


		return view("Home/index", [
			'movies' => $data,
			'movies2' => $query
		]);
		return view("Home/index");
	}

	// public function testEmail()
	// {
	// 	$email = service('email');

	// 	$email->setTo('omidhealth.tangerang@gmail.com');

	// 	$email->setSubject('A test email');

	// 	$email->setMessage('<h1>Hello world</h1>');

	// 	if ($email->send()) {
	// 		echo "Message sent";
	// 	} else {
	// 		echo $email->printDebugger();
	// 	}
	// }

	public function show($id)
	{
		$task = $this->getTaskOr404($id);

		return view("Tasks/show", [
			'task' => $task
		]);
	}

	private function getTaskOr404($id)

	{
		// $task = $this->model->find($id);

		// if ($task !== null && ($task->user_id !== $user->id)) {
		//     $task = null;
		// }

		$task = $this->model->getTaskByUserId($id, $this->current_user->id);

		if ($task === null) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with id $id not found");
		}

		return $task;
	}
}
