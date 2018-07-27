<?php

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

Route::get('/','WelcomeController@index');
Route::get('/portfolio','WelcomeController@portfolio');
Route::get('/services','WelcomeController@services');
Route::get('/contact','WelcomeController@contact');
Route::get('/blog_detail/{id}','WelcomeController@blog_detail');

/*
    * 
    * Start ADMIN 
    * 
 */

Route::get('/admin','AdminController@index');
Route::post('/admin-dashboard','AdminController@admin_dashboard');
/*
 * 
 * Start Super Admin
 */
Route::get('/dashboard','SuperAdminController@index');
Route::get('/add_category','SuperAdminController@add_category');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/manage_category','SuperAdminController@manage_category');
Route::get('/unpublished_category/{id}','SuperAdminController@unpublished_category');
Route::get('/published_category/{id}','SuperAdminController@published_category');
Route::get('/delete_category/{id}','SuperAdminController@delete_category');
Route::get('/edit_category/{id}','SuperAdminController@edit_category');
Route::post('/update_category/','SuperAdminController@update_category');
Route::get('/add_blog','SuperAdminController@add_blog');
Route::post('/save_blog','SuperAdminController@save_blog');
Route::get('/manage_blog','SuperAdminController@manage_blog');



Route::get('/logout','SuperAdminController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index');
