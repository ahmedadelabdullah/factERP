<?php

namespace App\Http\Controllers\admin;

use App\admin\Dress;
use App\admin\Office;
use App\admin\OfficeInvoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $invoice = OfficeInvoice::paginate(15);
        return view('admin.pages.offices_invoices.index', ['invoices' => $invoice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.offices_invoices.create' , [
            'offices' => Office::all(),
            'dresses' => Dress::all()
        ]);

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
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeInvoice $officeInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeInvoice $officeInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeInvoice $officeInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeInvoice $officeInvoice)
    {
        //
    }
}
