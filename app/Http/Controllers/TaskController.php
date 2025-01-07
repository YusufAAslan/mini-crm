<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,in_progress,completed',
        ]);
    
        // Save the validated data in the database
        $task = Task::create($validated);
    
        // Return the newly created task as a JSON response
        return response()->json($task, 201); // 201 = Created
    }
    

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $validated = $request->validate([
            'title' => 'sometimes|string',
            'status' => 'sometimes|in:pending,in_progress,completed',
        ]);

        $task->update($validated);
        return response()->json($task);
    }

    public function markComplete($id)
    {
        $task = Task::findOrFail($id);
        $task->update(['status' => 'completed']);
        return response()->json($task);
    }

    public function getTasks($employeeId)
    {
        $tasks = Task::where('employee_id', $employeeId)->get();
        return response()->json($tasks);
    }
}
