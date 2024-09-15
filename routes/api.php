<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::apiResource('users', UserController::class);
Route::apiResource('tasks', TaskController::class);