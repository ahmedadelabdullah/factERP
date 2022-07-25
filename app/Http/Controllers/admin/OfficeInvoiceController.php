<?php

namespace App\Http\Controllers\admin;

use App\admin\Dress;
use App\admin\Office;
use App\admin\OfficeInvoice;
use App\Http\Controllers\Controller;
use App\Http\Requests\invoiceRequest;
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

        $invoice = OfficeInvoice::with('rows')->paginate(5);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(invoiceRequest $request)
    {
        $data['offices_id'] = $request->offices_id;
        $data['invoice_number'] = $request->invoice_number;
        $data['date'] = $request->date;
        $data['total_pieces'] = $request->total_pieces;
        $data['sub_total'] = $request->sub_total;
        $data['image'] = $request->image;
        $data['total_amount'] = $request->total_amount;
        $info = OfficeInvoice::create($data);

        $inv_details = [];
        for ($i = 0 ; $i < count($request->quantity) ; $i++){
            $inv_details[$i]['model'] = $request->model[$i];
            $inv_details[$i]['unit_price'] = $request->unit_price[$i];
            $inv_details[$i]['quantity'] = $request->quantity[$i];
            $inv_details[$i]['price'] = $request->price[$i];
        }
        $details = $info->rows()->createMany($inv_details);
        return redirect('/OfficeInvoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function show($officeInvoice)
    {

        return view('admin.pages.offices_invoices.show',[
            'invoiceinf' => OfficeInvoice::find($officeInvoice),
        ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit($officeInvoice)
    {
        $singleRow = OfficeInvoice::findOrFail($officeInvoice);
        return view('admin.pages.offices_invoices.edit',
        ['edit_info' => $singleRow,
            'offices' => Office::all(),
            'dresses' => Dress::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(invoiceRequest $request,$officeInvoice)
    {
        $invoice = OfficeInvoice::whereId($officeInvoice)->first();
        $data['offices_id'] = $request->offices_id;
        $data['invoice_number'] = $request->invoice_number;
        $data['date'] = $request->date;
        $data['total_pieces'] = $request->total_pieces;
        $data['sub_total'] = $request->sub_total;
        $data['image'] = $request->image;
        $data['total_amount'] = $request->total_amount;
        $invoice ->update($data);
        $invoice->rows()->delete();
        $inv_details = [];
        for ($i = 0 ; $i < count($request->quantity) ; $i++){
            $inv_details[$i]['model'] = $request->model[$i];
            $inv_details[$i]['unit_price'] = $request->unit_price[$i];
            $inv_details[$i]['quantity'] = $request->quantity[$i];
            $inv_details[$i]['price'] = $request->price[$i];
        }
        $details = $invoice->rows()->createMany($inv_details);
        return redirect(route('OfficeInvoice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfficeInvoice  $officeInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($officeInvoice)
    {
        $singleRow = OfficeInvoice::whereId($officeInvoice)->first();
        $singleRow->delete();
        return redirect(route('OfficeInvoice.index'));

    }
}
