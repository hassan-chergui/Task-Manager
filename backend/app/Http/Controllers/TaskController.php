<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        // $tasks = Task::all();
        return view('home', compact('tasks'));
    }
    // 1. Show all tasks 
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // 2. Show create form
    public function create()
    {
        return view('tasks.create');
    }

    // 3. Store new task
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index');
    }

    // 4. Show edit form
    
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // 5. Update task
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'is_completed' => 'sometimes|boolean'
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index');
    }

    // 6. Delete task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
