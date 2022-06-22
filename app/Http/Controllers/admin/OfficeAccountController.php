<?php

namespace App\Http\Controllers\admin;

use App\admin\OfficeAccount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.offices_invoices.index' , [
            'invoices' => OfficeAccount::paginate('10')
        ]);
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
     * @param  \App\admin\OfficeAccount  $officeAccount
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeAccount $officeAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\OfficeAccount  $officeAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeAccount $officeAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\OfficeAccount  $officeAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeAccount $officeAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\OfficeAccount  $officeAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeAccount $officeAccount)
    {
        //
    }
}
