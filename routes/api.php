<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}/tasks', [TaskController::class, 'getTasks']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::patch('/tasks/{id}/complete', [TaskController::class, 'markComplete']);
