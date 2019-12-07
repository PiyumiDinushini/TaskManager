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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/task', function () {

    $data=App\tasks::all();
    return view('task')->with('tasks',$data);
});
Route::post('/saveTask', 'taskController@store' );

Route::get('/markascompleted/{id}','taskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','taskController@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}','taskController@deletetask');
Route::get('/updatetask/{id}','taskController@updatetaskview');

Route::post('/updatetaskagain','taskController@updatetask');


Route::get('/register','RegistrationController@create');
Route::post('register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

Route::post('/contactinfo','RegistrationController@contactstore');