<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FractionsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post_CategoryController;
use App\Http\Controllers\Profile\Email\ProfileEmailController;
use App\Http\Controllers\Profile\Password\ProfilePasswordController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\User\UserController;
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
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale?}')->middleware('setlocale')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('home.index');

    Route::prefix('rules')->group(function (){
        Route::get('/', [RulesController::class, 'rules'])->name('rules.index');
        Route::get('/2', [RulesController::class, 'rules2'])->name('rules2.index');
        Route::get('/3', [RulesController::class, 'rules3'])->name('rules3.index');
        Route::get('/4', [RulesController::class, 'rules4'])->name('rules4.index');
        Route::get('/5', [RulesController::class, 'rules5'])->name('rules5.index');
    });

    Route::get('/units', [UnitsController::class, 'units'])->name('units.index');
    Route::get('/components', [ComponentsController::class, 'components'])->name('components.index');
    Route::get('/fractions', [FractionsController::class, 'fractions'])->name('fractions.index');
    Route::get('/forum', [ForumController::class, 'forum'])->middleware(['verified', 'auth'])->name('forum.index');
    Route::get('/search', [SearchController::class, 'index'])->name('search.index');

    Auth::routes(['verify' => true]);
});
//Верификация
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class,'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class,'verify'])->name('verification.verify');
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class,'resend'])->name('verification.resend');

//Forgot password?
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get( '/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post( '/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

//Роуты юзеров
Route::middleware('admin')->group(function(){
    Route::get('/{locale}/user', [UserController::class, 'index'])->middleware('setlocale')->name('user.index');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

//Роуты найстроек профиля
Route::get('/profile/{user}/index', [ProfileController::class, 'index'])->name('profile.index');
Route::put('/profile/{user}/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/{user}/password_change', [ProfilePasswordController::class, 'index'])->name('profile.password_change.index');
Route::put('/profile/{user}/password_change', [ProfilePasswordController::class, 'update'])->name('profile.password_update.update');
Route::post('profile/{user}/password_reset', [ProfilePasswordController::class, 'reset'])->name('profile.password_reset.reset');

Route::get('/profile/{user}/email_change', [ProfileEmailController::class, 'index'])->name('profile.email_change.index');
Route::put('/profile/{user}/email_change', [ProfileEmailController::class, 'update'])->name('profile.email_update.update');

//Роуты категорий
Route::middleware('admin')->group(function(){
    Route::prefix('{locale}')->middleware('setlocale')->group(function (){
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');

});
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

//Роуты постов
Route::prefix('{locale}')->middleware('setlocale')->group(function() {
    Route::get('/post', [PostController::class, 'index'])->middleware('admin')->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');

});
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->middleware('admin')->name('post.destroy');

//Роуты комментариев
Route::post('/{post}/comments', [CommentController::class, 'store'])->name('post.comment.store');
Route::get('/{post}/comments/{comment}', [CommentController::class, 'edit'])->name('post.comment.edit');
Route::delete('/{comment}/{post}', [CommentController::class, 'destroy'])->middleware('admin')->name('post.comment.destroy');

//Роут вывода постов под конкретную категорию
Route::get('/post_category/{category}', [Post_CategoryController::class, 'show'])->name('post_category.index');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
