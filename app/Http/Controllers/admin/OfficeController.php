<?php

namespace App\Http\Controllers\admin;

use App\admin\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.offices.index' , [
            'offices' => Office::paginate('10')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $title = $request->title;
        $phone = $request->phone;
        $previous_balance = $request->previous_balance;
        $state = $request->state;

        $add_supplier = Office::create([
            'name' => $name,
            'phone' => $phone,
            'title' => $title,
            'state' => $state,
            'previous_balance' => $previous_balance,
        ]);

        return redirect()->route('office.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Office  $office
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($office)
    {
        return view('admin.pages.offices.show',[
            'singleOffice' => Office::find($office),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        //
    }
}
