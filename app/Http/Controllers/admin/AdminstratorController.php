<?php

namespace App\Http\Controllers\admin;

use App\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminstratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return view('admin.pages.dashboard');
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
     * @param  \App\Adminstrator  $adminstrator
     * @return \Illuminate\Http\Response
     */
    public function show(Adminstrator $adminstrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adminstrator  $adminstrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminstrator $adminstrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adminstrator  $adminstrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminstrator $adminstrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adminstrator  $adminstrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminstrator $adminstrator)
    {
        //
    }
}
