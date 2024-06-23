<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = $request->user()->toDoLists;
        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'todo' => 'required',
        ]);

        $toDoList = $request->user()->toDoLists()->create($validated);

        return response()->json(['message' => 'Task created successfully.', 'data' => $toDoList]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = ToDoList::findOrFail($id);
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'todo' => 'required',
        ]);

        $task = ToDoList::findOrFail($id);
        $task->update($validated);

        return response()->json(['message' => 'Task updated successfully.', 'data' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = ToDoList::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Task deleted successfully.']);
    }
}
