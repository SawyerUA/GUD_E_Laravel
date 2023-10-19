<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FractionsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UnitsController;
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

Route::get('/', [IndexController::class, 'index'])->name('home.index');
Route::get('/rules', [RulesController::class, 'rules'])->name('rules.index');
Route::get('/units', [UnitsController::class, 'units'])->name('units.index');
Route::get('/components', [ComponentsController::class, 'components'])->name('components.index');
Route::get('/fractions', [FractionsController::class, 'fractions'])->name('fractions.index');
Route::get('/forum', [ForumController::class, 'forum'])->name('forum.index');
Route::post('/search', [SearchController::class, 'search'])->name('search.index');

//Роуты категорий
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Роуты постов
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
Route::post('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
