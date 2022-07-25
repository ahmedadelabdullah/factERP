<?php

namespace App\Http\Controllers\admin;

use App\admin\Office;
use App\admin\OfficeAccounts;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OfficeAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Office::all();
        return view('admin.pages.offices_accounts.index' , ['accounts' => $account]);
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
     * @param  \App\OfficeAccounts  $officeAccounts
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeAccounts $officeAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfficeAccounts  $officeAccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeAccounts $officeAccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfficeAccounts  $officeAccounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeAccounts $officeAccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfficeAccounts  $officeAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeAccounts $officeAccounts)
    {
        //
    }
}
