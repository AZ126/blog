<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function show(){
       return 'Its a show';
    }

    function showWithId($id){
       $data=["Abdul Rehman", "27", "Pakistani"];
       return view('test', ['myId'=>$id, 'myData'=>$data]);
    }
    
    function getData(Request $req){
       return $req->input();
    }

    function index(){
       echo 'db connection will show here!';
       return DB::select("SELECT * FROM `users`");
    }
}
