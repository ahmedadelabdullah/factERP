<?php

namespace App\Http\Controllers\admin;

use App\admin\Supplier;
use App\admin\TexesInfo;
use App\admin\TexesInvoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TexesInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.texes_invoices.index' , [
            'invoiceinfs'=> TexesInfo::paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  TexesInvoice  $texesInvoice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($inv)
    {
        $singlerow = TexesInfo::find($inv);
        return view('admin.pages.texes_invoices.show',[
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TexesInvoice  $texesInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(TexesInvoice $texesInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TexesInvoice  $texesInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TexesInvoice $texesInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TexesInvoice  $texesInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(TexesInvoice $texesInvoice)
    {
        //
    }
}
