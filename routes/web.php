<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('pages.index');
});


Auth::routes(['verify' => true,'register' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Category
Route::get('Category/All','CategoryController@AllCat')->name('all.category');
Route::post('Category/Add','CategoryController@AddCat')->name('store.category');
Route::get('Category/Edit/{id}','CategoryController@Edit');
Route::post('Store/Category/{id}','CategoryController@update');
Route::get('softdelte/category/{id}','CategoryController@SoftDelete');
Route::get('Category/restore/{id}','CategoryController@Restore');
Route::get('pdelete/category/{id}','CategoryController@Pdelete');

Route::get('About/Us','CategoryController@AboutPage')->name('about.page');
// brand
Route::get('Brand/All','BrandController@AllBrand')->name('all.brand');
Route::post('Brand/Add','BrandController@StoreBrand')->name('store.brand');
Route::get('Brand/Edit/{id}','BrandController@Edit');
Route::post('Update/Brand/{id}','BrandController@update');
Route::get('Delete/Brand/{id}','BrandController@Delete');

// mulitimage
Route::get('mulit/Image','BrandController@index')->name('multi.image');
Route::post('mulit/Image/Store','BrandController@StoreImg')->name('store.image');

// profile
Route::get('User/Profile','BrandController@Profile')->name('profile.user');
Route::post('user/update/profile','BrandController@UpdateProfile')->name('update.user');
// pass
Route::get('User/Password','BrandController@Password')->name('change.password');
Route::post('user/update/password','BrandController@UpdatePassoword')->name('update.password');












