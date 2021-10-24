<?php

namespace App\Http\Controllers;

use App\Models\Mutator;
use Illuminate\Http\Request;

class MutatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(Request $request)
    {
        $mutator = new Mutator;
        $mutator->name="Abdul Rehman";
        $mutator->email="email@email.com";
        $mutator->address="address";
        $mutator->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mutator  $mutator
     * @return \Illuminate\Http\Response
     */
    public function show(Mutator $mutator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mutator  $mutator
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutator $mutator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mutator  $mutator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutator $mutator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mutator  $mutator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutator $mutator)
    {
        //
    }
}
