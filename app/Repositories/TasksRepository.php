<?php

namespace App\Repositories;

use App\Models\Tasks;
use App\Interfaces\TasksInterface;


// It handles database operations
class TasksRepository implements TasksInterface
{
    public function all()
    {
        return Tasks::all();
    }

    public function find($id)
    {
        return Tasks::findOrFail($id);
    }

    public function create(array $data)
    {
        return Tasks::create($data);
    }

    public function update($id, array $data)
    {
        $tasksUpdate = Tasks::findOrFail($id);
        $tasksUpdate->update($data);
        return $tasksUpdate;
    }

    public function delete($id)
    {
        $tasksUpdate = Tasks::findOrFail($id);
        $tasksUpdate->delete();
        return true;
    }
}
