<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/list-users', WelcomeController::class); // for testing
Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');;
