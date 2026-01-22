<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::with('category')
            ->latest()
            ->paginate(20);

        return TaskResource::collection($tasks);
    }

    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());

        return (new TaskResource($task->load('category')))->response()->setStatusCode(201);
    }

    public function show(Request $request, Task $task)
    {
        return new TaskResource($task->load('category'));
    }

    public function update(StoreTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return new TaskResource($task->fresh()->load('category'));
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
