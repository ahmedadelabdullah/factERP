<?php

namespace App\Http\Controllers\admin;

use App\admin\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        return view('admin.pages.suppliers.index'  , [
            'suppliers' => Supplier::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $add_supplier = $request->all();
        $name = $request->name;
        $title = $request->title;
        $supply = $request->supply;
        $mobile = $request->mobile;

        $add_supplier = Supplier::create([
            'name' => $name,
            'mobile' => $mobile,
            'supply' => $supply,
            'title' => $title,
        ]);

        return redirect()->route('supplier.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($supplier)
    {
        return view('admin.pages.suppliers.show',[
            'supplier' => Supplier::find($supplier),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($supplier)
    {
        return view('admin.pages.suppliers.edit' , [
            'supplier' => Supplier::findOrFail($supplier)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update($supplier ,Request $request)
    {
//        dd($supplier);
        $single_supplier = Supplier::findOrFail($supplier);
//        dd($single_supplier);
        $single_supplier->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'supply' => $request->supply,
            'title' => $request->title,
        ]);
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($supplier)
    {
        $single_supplier = Supplier::findOrFail($supplier);
        $single_supplier->delete();
        return redirect()->route('supplier.index');
    }
}
