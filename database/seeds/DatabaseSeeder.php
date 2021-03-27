<?php

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $task_1 = Task::create([
            'message' => 'Test test test',
            'completed' => false,
        ]);

        $task_2 = Task::create([
            'message' => 'Test test test',
            'completed' => true,
        ]);

        $task_3 = Task::create([
            'message' => 'Test test test',
            'completed' => false,
        ]);

        $task_4 = Task::create([
            'message' => 'Test test test',
            'completed' => true,
        ]);
    }
}
