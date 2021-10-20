<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggrigationController extends Controller
{
    public function operations(){
        return DB::table('members')->min('name');
    }
    
    public function joins(){
        return DB::table('employee')
         ->get();
    }
}
