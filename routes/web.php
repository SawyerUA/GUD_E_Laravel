<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FractionsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post_CategoryController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/rules', [RulesController::class, 'rules'])->name('rules.index');
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

//Роуты юзеров
Route::middleware('admin')->group(function(){
    Route::get('/{locale}/user', [UserController::class, 'index'])->middleware('setlocale')->name('user.index');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

//Роуты найстроки профиля
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{user}/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/{user}/password_change', [ProfileController::class, 'password_change'])->name('profile.password_change.show');
Route::put('/profile/{user}/password_change', [ProfileController::class, 'password_update'])->name('profile.password_update.update');
Route::post('profile/{user}/password_reset', [ProfileController::class, 'password_reset'])->name('profile.password_reset.patch');

Route::get('/profile/{user}/email_change', [ProfileController::class, 'email_change'])->name('profile.email_change.show');
Route::put('/profile/{user}/email_change', [ProfileController::class, 'email_update'])->name('profile.email_update.update');

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


//
//Route::get('/forgot-password', function () {
//    return view('auth.forgot-password');
//})->middleware('guest')->name('password.request');
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Password;
//
//Route::post('/forgot-password', function (Request $request) {
//    $request->validate(['email' => 'required|email']);
//
//    $status = Password::sendResetLink(
//        $request->only('email')
//    );
//
//    return $status === Password::RESET_LINK_SENT
//        ? back()->with(['status' => __($status)])
//        : back()->withErrors(['email' => __($status)]);
//})->middleware('guest')->name('password.email');
//
//Route::get('/reset-password/{token}', function ($token) {
//    return view('auth.reset-password', ['token' => $token]);
//})->middleware('guest')->name('password.reset');
//
//use Illuminate\Auth\Events\PasswordReset;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;
//
//Route::post('/reset-password', function (Request $request) {
//    $request->validate([
//        'token' => 'required',
//        'email' => 'required|email',
//        'password' => 'required|min:8|confirmed',
//    ]);
//
//    $status = Password::reset(
//        $request->only('email', 'password', 'password_confirmation', 'token'),
//        function ($user, $password) {
//            $user->forceFill([
//                'password' => Hash::make($password)
//            ])->setRememberToken(Str::random(60));
//
//            $user->save();
//
//            event(new PasswordReset($user));
//        }
//    );
//
//    return $status === Password::PASSWORD_RESET
//        ? redirect()->route('login')->with('status', __($status))
//        : back()->withErrors(['email' => [__($status)]]);
//})->middleware('guest')->name('password.update');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
