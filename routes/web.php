<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use \App\Http\Controllers\UserController;

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

Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store'])->middleware('auth');

Route::resource('users', UserController::class);
Route::get('users/delete/{id}', [UserController::class, 'destroy'])->name('users.delete');
Route::post('users/update', [UserController::class, 'update'])->name('users.update');

# Route::prefix('users')->group(function () {
#     Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
#     Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
#     Route::post('/', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
#     Route::get('/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
#     Route::get('/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
#     Route::put('/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
#     Route::delete('/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

           # Route::controller(ItemController::class)->group(function(){
           #     Route::get('items', 'index')->name('items.index');
           #     Route::post('items', 'store')->name('items.store');
           #     Route::get('items/create', 'create')->name('items.create');
           #     Route::get('items/{item}', 'show')->name('items.show');
           #     Route::put('items/{item}', 'update')->name('items.update');
           #     Route::delete('items/{item}', 'destroy')->name('items.destroy');
           #     Route::get('items/{item}/edit', 'edit')->name('items.edit');
           # });
# });

Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index']);
Route::get('teams', [\App\Http\Controllers\TeamController::class, 'index']);
Route::get('countries', [\App\Http\Controllers\CountryController::class, 'index']);
Route::get('attachments', [\App\Http\Controllers\AttachmentController::class, 'index']);
Route::get('comments', [\App\Http\Controllers\CommentController::class, 'index']);
Route::get('projects', [\App\Http\Controllers\ProjectController::class, 'store']); // ->middleware('auth')

// Tables :-
//         users - user_id
//         roles
//         users_roles

//         countries
//         projects
//         project_user

//         teams - country_id
//         team_user 

//         tasks - user_id
//         comments - task_id

