<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $tasks = Task::all();
        return view('readall', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $task_name = $request->task_name;
        $task_desc = $request->task_desc;

        $task = Task::create([
            'task_name' => $task_name,
            'task_desc' => $task_desc
        ]);

        if ($task) {
            return "data created successfully";
        } else {
            return "Error Creating Data";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
