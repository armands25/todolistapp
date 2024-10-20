<?php

namespace App\Services;

use App\Interfaces\TasksInterface;

// Create a service class to handle business logic:

class TasksService
{
    protected $tasksRepository;

    public function __construct(TasksInterface $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
    }

    public function getAllTasks()
    {
        return $this->tasksRepository->all();
    }

    public function getTasksById($id)
    {
        return $this->tasksRepository->find($id);
    }

    public function createTask(array $data)
    {
        return $this->tasksRepository->create($data);
    }

    public function updateTask($id, array $data)
    {
        return $this->tasksRepository->update($id, $data);
    }

    public function deleteTask($id)
    {
        return $this->tasksRepository->delete($id);
    }
}
