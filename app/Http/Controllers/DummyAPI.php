<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DummyAPI extends Controller
{
    function getData($id = null)
    {
        $member = new Member();
        return $id ? $member::find($id) : $member::all();
    }

    function postData(Request $req)
    {
        $member = new Member();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();

        return $result ? ["result" => "Success"]
            : ["result" => "Failed"];
    }

    function putData(Request $req)
    {
        $member = Member::find($req->id);
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        return $result ? ["result" => "Success"]
            : ["result" => "Failed"];
    }

    function deleteData(Request $req)
    {
        $member = Member::find($req->id)->get;
        $result = $member->delete();
        return $result ? ["result" => "Success, " . $req->id . " has been deleted.!"]
            : ["result" => "Failed"];
    }

    function searchData($name)
    {
        return Member::where('name','like','%'.$name.'%')->get();
    }
}
