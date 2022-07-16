<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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
Route::controller(ItemController::class)
        ->prefix('/todos')
        ->name('todo.')
        ->group(function(){
          
Route::get('/about','about')->name('about');
Route::get('/editTask','edit')->name('edit');
Route::get('/createTask' ,'createTask')->name('createTask');
Route::get('/taskList' ,'taskList')->name('taskList');
Route::post('/taskStore' ,'store')->name('taskStore');
Route::post('/taskUpdate','taskUpdate')->name('taskUpdate');
//Route::post('/findOne','findOne')->name('findOne');
//Route::post('/remove' ,'remove')->name('remove');
//Route::get('/findTask' ,'search')->name('search'); 

        });

