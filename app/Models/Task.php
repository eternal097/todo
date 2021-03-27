<?php

namespace App\Models;

use App\Http\Requests\AddTaskRequest;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function addTask($request)
    {
        Task::create([
            'message' => $request->message,
            'completed' => false,
        ]);
    }
}
