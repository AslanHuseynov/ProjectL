<?php

namespace App\Http\Controllers;

use App\Locksmith;
use Illuminate\Http\Request;

class LocksmithController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Locksmith  $locksmith
     * @return \Illuminate\Http\Response
     */
    public function show(Locksmith $locksmith)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Locksmith  $locksmith
     * @return \Illuminate\Http\Response
     */
    public function edit(Locksmith $locksmith)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locksmith  $locksmith
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locksmith $locksmith)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Locksmith  $locksmith
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locksmith $locksmith)
    {
        //
    }
}
