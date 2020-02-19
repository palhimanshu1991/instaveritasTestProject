<?php

use Illuminate\Http\Request;

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

/**
 * API Routes for all and single category.
 **/
Route::get('/categories', 'API\CategoryController@index')->name('categories');
Route::get('/category/{id}', 'API\CategoryController@show');

/**
 * API Route for single subcategory and its relation.
 **/
Route::get('/subcategory/{subCategory}', 'API\SubCategoryController@show');


/**
 * API Route for products, its details and CRUD Operations.
 **/
Route::get('/products/all', 'API\ProductController@index');
Route::get('/product/{product}', 'API\ProductController@show');
