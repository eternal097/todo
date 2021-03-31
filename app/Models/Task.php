<?php

namespace App\Models;

use App\Http\Requests\AddTaskRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Task extends Model
{
    protected $guarded = [];

    public function user ()
    {
    	return $this->belongTo(User::class);
    }

    public function addTask($request)
    {
        Task::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'completed' => false,
        ]);
    }

    public function getUserTask ($id)
    {
        return Task::where([
            ['id', $id],
            ['user_id', Auth::id()],
        ])->firstOrFail();
    }
}
