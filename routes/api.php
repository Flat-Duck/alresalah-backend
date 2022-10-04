<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    //->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', 'Api\\RoleController');
        Route::apiResource('permissions', 'Api\\PermissionController');

        Route::apiResource('users', 'Api\\UserController');

        // User Carts
        Route::get('/users/{user}/carts','Api\\UserCartsController@index')->name('users.carts.index');
        Route::post('/users/{user}/carts','Api\\UserCartsController@store')->name('users.carts.store');

        // User Orders
        Route::get('/users/{user}/orders','Api\\UserOrdersController@index')->name('users.orders.index');
        Route::post('/users/{user}/orders','Api\\UserOrdersController@store')->name('users.orders.store');

        Route::apiResource('books', 'Api\\BookController');

        // Book Categories
        Route::get('/books/{book}/categories','Api\\BookCategoriesController@index')->name('books.categories.index');
        Route::post('/books/{book}/categories/{category}','Api\\BookCategoriesController@store')->name('books.categories.store');
        Route::delete('/books/{book}/categories/{category}','Api\\BookCategoriesController@destroy')->name('books.categories.destroy');

        // Book Carts
        Route::get('/books/{book}/carts','Api\\BookCartsController@index')->name('books.carts.index');
        Route::post('/books/{book}/carts/{cart}','Api\\BookCartsController@store')->name('books.carts.store');
        Route::delete('/books/{book}/carts/{cart}','Api\\BookCartsController@destroy')->name('books.carts.destroy');

        // Book Orders
        Route::get('/books/{book}/orders','Api\\BookOrdersController@index')->name('books.orders.index');
        Route::post('/books/{book}/orders/{order}','Api\\BookOrdersController@store')->name('books.orders.store');
        Route::delete('/books/{book}/orders/{order}','Api\\BookOrdersController@destroy')->name('books.orders.destroy');

        // Book Tags
        Route::get('/books/{book}/tags', 'Api\\BookTagsController@index')->name('books.tags.index');
        Route::post('/books/{book}/tags/{tag}','Api\\BookTagsController@store')->name('books.tags.store');
        Route::delete('/books/{book}/tags/{tag}','Api\\BookTagsController@destroy')->name('books.tags.destroy');

        Route::apiResource('carts', 'Api\\CartController');

        // Cart Books
        Route::get('/carts/{cart}/books','Api\\CartBooksController@index')->name('carts.books.index');
        Route::post('/carts/{cart}/books/{book}','Api\\CartBooksController@store')->name('carts.books.store');
        Route::delete('/carts/{cart}/books/{book}','Api\\CartBooksController@destroy')->name('carts.books.destroy');

        Route::apiResource('categories', 'Api\\CategoryController');

        // Category Books
        Route::get('/categories/{category}/books','Api\\CategoryBooksController@index')->name('categories.books.index');
        Route::post('/categories/{category}/books/{book}','Api\\CategoryBooksController@store')->name('categories.books.store');
        Route::delete('/categories/{category}/books/{book}','Api\\CategoryBooksController@destroy')->name('categories.books.destroy');

        Route::apiResource('levels', 'Api\\LevelController');

        // Level Books
        Route::get('/levels/{level}/books','Api\\LevelBooksController@index')->name('levels.books.index');
        Route::post('/levels/{level}/books','Api\\LevelBooksController@store')->name('levels.books.store');

        Route::apiResource('orders', 'Api\\OrderController');

        // Order Books
        Route::get('/orders/{order}/books','Api\\OrderBooksController@index')->name('orders.books.index');
        Route::post('/orders/{order}/books/{book}','Api\\OrderBooksController@store')->name('orders.books.store');
        Route::delete('/orders/{order}/books/{book}','Api\\OrderBooksController@destroy')->name('orders.books.destroy');

        Route::apiResource('publishers', 'Api\\PublisherController');

        // Publisher Books
        Route::get('/publishers/{publisher}/books','Api\\PublisherBooksController@index')->name('publishers.books.index');
        Route::post('/publishers/{publisher}/books','Api\\PublisherBooksController@store')->name('publishers.books.store');

        Route::apiResource('tags', 'Api\\TagController');

        // Tag Books
        Route::get('/tags/{tag}/books', 'Api\\TagBooksController@index')->name(
            'tags.books.index'
        );
        Route::post('/tags/{tag}/books/{book}','Api\\TagBooksController@store')->name('tags.books.store');
        Route::delete('/tags/{tag}/books/{book}','Api\\TagBooksController@destroy')->name('tags.books.destroy');
    });
