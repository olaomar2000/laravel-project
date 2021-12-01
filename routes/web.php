<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashbord\RatingController;
use App\Http\Controllers\Dashbord\StoreController;
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

                    /*   user website*/
Route::get('/index', 'Website\IndexController@index')->name('index');
Route::get('/stores/{id}', 'Website\IndexController@stores')->name('stores');
Route::get('/details/{id}', 'Website\IndexController@details')->name('details');
Route::post('rate/{id}', 'Dashbord\RatingController@addRate');



/** Search */
Route::post('search', 'Website\IndexController@search');




                         /* Dashbord CATEGORY */

// create category 
Route::get('category/create', 'Dashbord\CategoryController@create');
Route::post('category/store', 'Dashbord\CategoryController@store');

// view category
Route::get('category/index', 'Dashbord\CategoryController@index');

// edit category
Route::get('category/{id}/edit', 'Dashbord\CategoryController@edit');
Route::post('category/update/{id}', 'Dashbord\CategoryController@update');

// delete category
Route::get('category/delete/{id}', 'Dashbord\CategoryController@destroy');

                        /* Dashbord STORE */

// create store 
Route::get('store/create', 'Dashbord\StoreController@create');
Route::post('store/store', 'Dashbord\StoreController@store');

// view store
Route::get('store/index', 'Dashbord\StoreController@index');

// edit store
Route::get('store/{id}/edit', 'Dashbord\StoreController@edit');
Route::post('store/update/{id}', 'Dashbord\StoreController@update');

// delete store
Route::get('store/delete/{id}', 'Dashbord\StoreController@destroy');


                           /*Dashbord  Rating */

Route::get('rating/index', 'Dashbord\RatingController@index');      


//Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout',function(){
return view('auth.login');
});





