<?php

use App\Task;


Route::get('/tasks', function () {
	$tasks = Tasks::all();

	return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
	$tasks = Task::find($id);

	return view('tasks.show', compact('task'));
});


