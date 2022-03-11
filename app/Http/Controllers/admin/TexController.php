<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\Supplier;
use App\admin\tex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.pages.texes_invoices.index' , [
            'invoices' => tex::paginate(5),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.texes_invoices.create',[
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        $supplier = request()->supplier;
//        $Norolls = request()->Norolls;
//        $unit_price = request()->unit_price;
//        $quantity = request()->quantity;
//        $invoice_number = request()->invoice_number;
//        $date = request()->date;
//
//        $row = tex::create([
//            'supplier_id' => $supplier,
//            'Norolls' => $Norolls,
//            'unitprice' => $unit_price,
//            'quantity' => $quantity,
//            'invoice_number' => $invoice_number,
//            'date' => $date
//        ]);

        tex::create($request->all());
        return redirect('/tex');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tex  $tex
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(tex $tex)
    {
        return view('admin.pages.texes_invoices.show',[
            'invoice' => $tex,
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tex  $tex
     * @return \Illuminate\Http\Response
     */
    public function edit(tex $tex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tex  $tex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tex $tex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tex  $tex
     * @return \Illuminate\Http\Response
     */
    public function destroy(tex $tex)
    {
        //
    }
}
