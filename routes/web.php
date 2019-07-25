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


// User Routes

Route::group(['namespace' => 'User'], function(){
    
    Route::get('/', 'HomeController@index');

    Route::get('post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
});



// Admin Routes

Route::group(['namespace' => 'Admin'], function(){

    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    Route::resource('admin/user', 'UserController'); 
       
    Route::resource('admin/post', 'PostController');    

    Route::resource('admin/tag', 'TagController');

    Route::resource('admin/category', 'CategoryController');

});






// Route::get('/', function () {
//     return view('user.blog');
// });

// Route::get('post', function(){
//     return view('user.post');
// })->name('post');
// Route::get('admin/home', function() {
//     return view('admin.home');
// })->name('admin');

// Route::get('admin/post', function() {
//     return view('admin.post.post');
// });


// Route::get('admin/tag', function() {
//     return view('admin.tag.tag');
// });


// Route::get('admin/category', function() {
//     return view('admin.category.category');
// });