<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TasksService;
use Http\Requests\TaskRequest;

class TasksController extends Controller
{
    protected $tasksService;

    public function __construct(TasksService $tasksService)
    {
        $this->tasksService = $tasksService;
    }

    public function index()
    {
        $allTasks = $this->tasksService->getAllTasks();
        return view('index.tasks')->with(['allTasks' =>  $allTasks]);
    }

    public function createTodo(TaskRequest $request){
        $data = $this->tasksService->createTask($request->validated());
        return redirect()->route('index.tasks')->with('success', 'Task created successfully');
    }
}
