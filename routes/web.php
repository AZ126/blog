<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreUsersController;
use Illuminate\Support\Facades\App;

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

Route::view('home', 'homePage')->middleware('protectedPage');
Route::view('about', 'aboutPage');
Route::view('users', 'usersPage');

Route::get('dbConnection', [UserController::class,'index']);
Route::get('getData', [UserController::class,'getData']);
Route::get('api', [UserController::class,'apiCall']);

Route::view('store', 'storeusers');
Route::post('storeController', [StoreUsersController::class, 'storeM']);

Route::view('file', 'upload');
Route::post('uploadfile', [StoreUsersController::class, 'uploadFile']);

Route::get('local/{lang}', function($lang){
    App::setLocale($lang);
    return view('localization');
});

Route::view('addMamber', 'addMambers');

// Route::get('/user',[UserController::class,'show']);
// Route::get('/user/{id}',[UserController::class,'showWithId']);

// Route::view('users','users');
// Route::post('users',[UserController::class,'getData']);
// Route::view('about','about');


// Route::group(['middleware'=>['protectedPage']], function(){
//     Route::view('about', 'aboutPage');
// });