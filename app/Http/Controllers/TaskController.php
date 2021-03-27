<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTaskRequest;
use App\Http\Requests\EditTaskRequest;
use App\Models\Task;


class TaskController extends Controller
{
    protected $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->task->simplePaginate(5);

        return view('todo-list', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddTaskRequest $request)
    {
        $this->task->addTask($request);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Collection $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('todo-edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Collection $task
     * @return \Illuminate\Http\Response
     */
    public function update(EditTaskRequest $request, Task $task)
    {
        $task->update($request->all());

        return redirect()->route('main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Collection  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
