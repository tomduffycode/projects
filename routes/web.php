<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/projects/create', [ProjectsController::class, 'create'])->name('createProject');
    Route::get('/projects/{project}', [ProjectsController::class, 'show']);
    Route::post('/projects', [ProjectsController::class, 'store']);
});