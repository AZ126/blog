<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $member = new Member();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        $req->session()->flash('alert-success', 'User was successful added!');
        return redirect('addMamber');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $data = $member::paginate(8);
        return view('memberList', ["members" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, $id)
    {
        $data = $member::find($id);
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, $id)
    {
        $data = $member::find($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->update();
        return redirect('memberList')->with("Data Updated Successfully.!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, $id)
    {
        $data = $member::find($id);
        $data->delete();
        return redirect('memberList');
    }

    public function QueryBuilder(Request $req)
    {
        // $data = DB::table('members')->get();
        // return view('qblist', ['data'=>$data]);

        // return DB::table('members')->insert([
        //     'name'=>'Test',
        //     'email'=>'ab@gm.com',
        //     'address'=>'N/A',
        // ]);

        // return DB::table('members')
        // ->where('id', 13)
        // ->update([
        //     'name'=>'Test1',
        //     'email'=>'ab1@gm.com',
        //     'address'=>'1N/A',
        // ]);

        // return DB::table('members')
        // ->where('id', 13)
        // ->delete();

        return DB::table('members')
            ->updateOrInsert(['id' => '1'], ['name' => 'Abdul Rehman']);
    }
}
