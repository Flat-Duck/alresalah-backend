<?php

use Illuminate\Support\Facades\Route;

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


// Admin routes
Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // Login
        Route::get('/', 'LoginController@showLoginForm')->name('login');
        Route::post('/', 'LoginController@login');

        // Forget and reset Password
        Route::get('forgot-password', 'ForgotPasswordController@showLinkRequestForm')->name('forgot_password');
        Route::post('forgot-password', 'ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}/{email?}', 'ResetPasswordController@showResetForm')->name('reset_password_link');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('reset_password');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('reset_password');
    });

    // Logged in admin user required
    Route::group(['middleware' => 'auth:admin'], function () {
        // Dashboard
        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

        // Profile
        Route::get('/profile', 'AdminController@profile')->name('profile');
        Route::post('/profile', 'AdminController@profileUpdate');
        Route::post('/password', 'AdminController@passwordUpdate')->name('password_update');

        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('orders', OrderController::class);
        
        Route::resource('tags', TagController::class);
        Route::POST('books/import', 'BookController@import')->name('books.import');
        Route::GET('books/importing', 'BookController@importing')->name('books.importing');
        Route::resource('books', BookController::class);
        Route::resource('users', UserController::class);
        Route::resource('levels', LevelController::class);
        Route::resource('publishers', PublisherController::class);
        Route::resource('categories', CategoryController::class);
    });
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/bo', 'BookController@index')->name('books');

Route::prefix('/')->name('shop.')    
    ->group(function () {
        Route::resource('books', Shop\BookController::class);     
        Route::GET('profile', 'Shop\UserController@profile')->name('books.profile');
     
    });
