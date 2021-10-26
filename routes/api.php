<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DummyAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("getAPI/{id?}",[DummyAPI::class,'getData']);
Route::post("postAPI",[DummyAPI::class,'postData']);
Route::put("putAPI",[DummyAPI::class,'putData']);
Route::delete("deleteAPI/{id}",[DummyAPI::class,'deleteData']);
