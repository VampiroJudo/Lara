<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller {
    
	public function index() {
		$tasks = Tasks::all();

		return view('tasks.index', compact('tasks'));

	}

	public function show(){
		$tasks = Task::find($id);

		return view('tasks.show', compact('task'));
	}
}


