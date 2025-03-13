<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required|max:255',
            'beschreibung' => 'nullable'
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')
            ->with('erfolg', 'Aufgabe wurde erstellt!');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'titel' => 'required|max:255',
            'beschreibung' => 'nullable'
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')
            ->with('erfolg', 'Aufgabe wurde aktualisiert!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('erfolg', 'Aufgabe wurde gelöscht!');
    }
}
