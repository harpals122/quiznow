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
Auth::routes();

Route::get('/', 'HomeController@getIndex');


Route::get('/e-learning', 'ELearningController@getIndex')->name('e-learning')->middleware('auth');
Route::get('/articles', 'ArticleController@getIndex')->name('article')->middleware('auth');
Route::get('/quiz', 'QuizController@getIndex')->name('quiz')->middleware('auth');


   
    
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/newuser',function () {
    return view('admin/contents/newUser');
});
  });


 Route::prefix('e-learning')->group(function() {
     Route::get('/php',function () {
        return view('users/e-learning/php/index');
     })->name('learnphp')->middleware('auth');
     Route::get('/php/introduction',function () {
       return view('users/e-learning/php/introduction');
     })->name('introductionToPhp')->middleware('auth');
     Route::get('/ionic',function () {
       return view('users/e-learning/ionic/index');
     })->name('learnionic')->middleware('auth');
     Route::get('/java',function () {
      return view('users/e-learning/java/index');
     })->name('learnjava')->middleware('auth');
});

