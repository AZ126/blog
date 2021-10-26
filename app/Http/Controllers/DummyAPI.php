<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DummyAPI extends Controller
{
    function getData($id=null){
        $member = new Member();
        return $id ? $member::find($id) : $member::all();
    }
}
