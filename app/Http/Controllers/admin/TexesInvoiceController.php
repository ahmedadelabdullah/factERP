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
//            'texrows' => TexesInvoice::paginate(10),
            'invoiceinfs'=> TexesInfo::paginate(10),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.texes_invoices.create' , [
            'suppliers' => Supplier::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $data['supplier_id'] = $request->supplier_id;
        $data['invoice_number'] = $request->invoice_number;
        $data['date'] = $request->date;
        $data['total_rolls'] = $request->total_rolls;
        $data['total_amount'] = $request->total_amount;
        $data['comment'] = $request->comment;
        $data['no_classes'] = count($request->material);

        $info = TexesInfo::create($data);

        $inv_details = [];
        for ($i = 0 ; $i < count($request->material) ; $i++){
            $inv_details[$i]['material'] = $request->material[$i];
            $inv_details[$i]['Norolls'] = $request->Norolls[$i];
            $inv_details[$i]['unit_price'] = $request->unit_price[$i];
            $inv_details[$i]['quantity'] = $request->quantity[$i];
            $inv_details[$i]['price'] = $request->price[$i];
        }
        $details = $info->rows()->createMany($inv_details);
        return redirect('/tex');


    }

    /**
     * Display the specified resource.
     *
     * @param  TexesInvoice  $texesInvoice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($inv)
    {
//        return view('admin.pages.texes_invoices.show' , [
//            'invoice' => TexesInvoice::find($inv)
////            'invoiceinfs'=> TexesInfo::paginate(10),
//
//        ]);
        $invoice =  TexesInvoice::find($inv);
        return view('admin.pages.texes_invoices.show',[
            'invoice' => $invoice
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
