<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\blogController;
//use App\Http\Controllers\formController;
use App\Http\Controllers\form;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('blog/createblog',[blogController::class,'create']);
// Route::post('blog/store',[blogController::class,'store']);


//form
// Route::get('form/createForm',[formController::class,'create']);
// Route::post('form/confirmation',[formController::class],'confirmation');

Route::get('users/form',[form::class,'create']);

Route::post('users/success',[form::class,'success']);