<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreUsersController extends Controller
{
    function storeM(Request $req){
        $userName = $req->input('userName');
        $req->session()->flash('user',$userName);
        return redirect('store');
    }
}
