<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Shop\BookController as ShopBookController;
use App\Http\Controllers\Shop\UserController as ShopUserController;
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


// Admin routes
Route::name('admin.')->prefix('admin')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // Login
        Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/', [LoginController::class, 'login']);

        // Forget and reset Password
        Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot_password');
        Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
        Route::get('password/reset/{token}/{email?}', [ResetPasswordController::class, 'showResetForm'])->name('reset_password_link');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('reset_password');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('reset_password');
    });

    // Logged in admin user required
    Route::group(['middleware' => 'auth:admin'], function () {
        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile', [AdminController::class, 'profileUpdate']);
        Route::post('/password', [AdminController::class, 'passwordUpdate'])->name('password_update');

        // Logout
        Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('orders', OrderController::class);
        
        Route::resource('tags', TagController::class);
        Route::POST('books/import', [BookController::class, 'import'])->name('books.import');
        Route::GET('books/importing', [BookController::class, 'importing'])->name('books.importing');
        Route::resource('books', BookController::class);
        Route::resource('users', UserController::class);
        Route::resource('levels', LevelController::class);
        Route::resource('publishers', PublisherController::class);
        Route::resource('categories', CategoryController::class);
    });
});
//Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/bo', [BookController::class, 'index'])->name('books');

Route::prefix('/')->name('shop.')    
    ->group(function () {
        Route::resource('books', ShopBookController::class);     
        Route::GET('profile', [ShopUserController::class, 'profile'])->name('books.profile');
     
    });
