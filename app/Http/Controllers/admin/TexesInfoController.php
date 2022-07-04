<?php

namespace App\Http\Controllers\admin;

use App\admin\TexesInfo;
use App\admin\TexesInvoice;
use App\admin\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TexesInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.texes_invoices.index' , [
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
            'materials' => TexesInvoice::all(),
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

        $data['supplier_id'] = $request->supplier_id;
        if ($request->image !== null) {
            $file_extention = $request->image->getClientOriginalExtension();
            $file_name = time().'.'.$file_extention;
            $pass = 'admin/dist/img/tex';
            $data['image'] = $request->image ->move($pass,$file_name);
        }
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
        dd($details);
        return redirect('/tex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TexesInfo  $texesInfo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($catch_inv_id)
    {
                return view('admin.pages.texes_invoices.show',[
                    'invoiceinf' => TexesInfo::find($catch_inv_id),
                ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TexesInfo  $texesInfo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($texesInfoEdit)
    {
        $texesInfoEdit = TexesInfo::findOrFail($texesInfoEdit);
        return view('admin.pages.texes_invoices.edit' , [
            'edit_info' => $texesInfoEdit,
            'suppliers' => Supplier::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TexesInfo  $texesInfo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,$id)
    {
        $invoice = TexesInfo::whereId($id)->first();
//        $data['supplier_id'] = $request->supplier_id;
        if ($request->image !== null) {
            $file_extention = $request->image->getClientOriginalExtension();
            $file_name = time().'.'.$file_extention;
            $pass = 'admin/dist/img/tex';
            $data['image'] = $request->image ->move($pass,$file_name);
        }
        $data['invoice_number'] = $request->invoice_number;
        $data['date'] = $request->date;
        $data['total_rolls'] = $request->total_rolls;
        $data['total_amount'] = $request->total_amount;
        $data['comment'] = $request->comment;
        $data['no_classes'] = count($request->material);

        $invoice ->update($data);
        $invoice->rows()->delete();

        $inv_details = [];
        for ($i = 0 ; $i < count($request->material) ; $i++){
            $inv_details[$i]['material'] = $request->material[$i];
            $inv_details[$i]['Norolls'] = $request->Norolls[$i];
            $inv_details[$i]['unit_price'] = $request->unit_price[$i];
            $inv_details[$i]['quantity'] = $request->quantity[$i];
            $inv_details[$i]['price'] = $request->price[$i];
        }
        $details = $invoice->rows()->createMany($inv_details);
        return redirect('/tex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TexesInfo  $texesInfo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($texe)
    {
        $deleting = TexesInfo::findOrFail($texe);

        $deleting->delete();
        return redirect()->route('tex.index');
    }
}
