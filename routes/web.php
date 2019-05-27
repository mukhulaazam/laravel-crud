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

Route::get('/view-employee', [
   'uses'   => 'EmployeeController@basePath',
   'as'     => 'view-employee'
]);

Route::get('/add-employee', [
   'uses'   => 'EmployeeController@addEmployee',
   'as'     => 'add-employee'
]);
//This is the function for create or insert data to database route
Route::post('/new-employee', [
   'uses'   => 'EmployeeController@newEmployee',
   'as'     => 'new-employee'
]);
Route::get('/edit-employee/{id}', [
   'uses'   => 'EmployeeController@editEmployee',
   'as'     => 'edit-employee'
]);

Route::post('/update-employee', [
   'uses'   => 'EmployeeController@updateEmployee',
   'as'     => 'update-employee'
]);
Route::get('/delete-employee/{id}', [
    'uses'  => 'EmployeeController@deleteEmployee',
    'as'    => 'delete-employee'
]);