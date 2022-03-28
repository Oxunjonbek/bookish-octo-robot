<?php

use App\DataTables\UsersDataTable;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\EloquentController;
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

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', function (UserDataTable $dataTable) {
    return $dataTable->render('index');

// Route::get('/', 'App\Http\Controllers\HomeController@index');
// Route::get('/', function (UsersDataTable $dataTable){
//     return $dataTable->render('index');
});
// Route::controller('datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables',
// ]);
// Route::resource('users', 'UsersController');
// Route::get('/users', 'HomeController@users')->name('users');
// Route::get('/users', [UsersController::class, 'users'])->name('users');
// Route::get('/filters', 'EloquentController::class@index');
// Route::get('/', function (UserDataTable $dataTable) {
//     return $dataTable->render('index');
Route::get('/filters', [EloquentController::class, 'index'])->name('filters');

