<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddTaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/task', [TaskController::class, 'index']);
    
Route::get('/projet', [ProjetController::class, 'index']);

Route::get('/addtask', [TaskController::class, 'addtask']);

Route::post('/task', [TaskController::class, 'store']);

Route::get('/projets/create', [ProjetController::class, 'create'])->name('projets.create');

Route::post('/projets', [ProjetController::class, 'store'])->name('projets.store');

Route::get('/projets/{id}', [ProjetController::class, 'show'])->name('projets.show');

Route::post('/projets/{projet_id}', [ProjetController::class, 'addTask'])->name('projets.addTask');

Route::get('/task/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/{id}', [TaskController::class, 'edit'])->name('tasks.edit');

Route::post('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/projets/{id}', [ProjetController::class, 'destroy'])->name('projets.destroy');

Route::get('/stats', [TaskController::class, 'showstats']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
