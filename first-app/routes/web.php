<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[\App\Http\Controllers\MainController::class, 'index']);

//routes for role
//Route::get('/users/create', [])
Route::get('/role',[\App\Http\Controllers\RoleController::class, 'showAllRole'])->name('role.index');
Route::get('/role/create',[\App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
Route::post('/role',[\App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
Route::get('/role/{role}',[\App\Http\Controllers\RoleController::class, 'show'])->name('role.show');
Route::get('/role/{role}/edit',[\App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
Route::patch('/role/{role}',[\App\Http\Controllers\RoleController::class, 'update'])->name('role.update');


//user route

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/registration', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user',[\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'show'] )->name('user.show');
Route::patch('/user/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');



//categories routes

Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categpry', [CategoryController::class, 'store'])->name('category.store');