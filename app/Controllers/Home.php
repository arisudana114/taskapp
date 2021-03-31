<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
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
