<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreUsersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\AggrigationController;
use App\Http\Controllers\AccessorController;
use App\Http\Controllers\MutatorController;

use App\Mail\EmailTemplate;

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
Route::post('addMamber', [MembersController::class, 'store']);

Route::get('memberList', [MembersController::class, 'show']);
Route::get('delete/{id}', [MembersController::class, 'destroy']);

Route::get('edit/{id}', [MembersController::class, 'edit']);
Route::put('edit/update/{id}', [MembersController::class, 'update']);

Route::get('list/', [MembersController::class, 'QueryBuilder']);
Route::get('aggrigation/', [AggrigationController::class, 'operations']);
Route::get('joins/', [AggrigationController::class, 'joins']);

Route::get('accessor/', [AccessorController::class, 'index']);
Route::get('mutator/', [MutatorController::class, 'store']);

Route::get('email/', function(){
    return new EmailTemplate();    
});

// Route::get('/user',[UserController::class,'show']);
// Route::get('/user/{id}',[UserController::class,'showWithId']);

// Route::view('users','users');
// Route::post('users',[UserController::class,'getData']);
// Route::view('about','about');

// Route::group(['middleware'=>['protectedPage']], function(){
//     Route::view('about', 'aboutPage');
// });
