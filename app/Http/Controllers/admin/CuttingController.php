<?php

namespace App\Http\Controllers\admin;

use App\admin\Cutting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuttingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.cuttings.index' ,
            [
            'cuts' => Cutting::paginate(10)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.cuttings.create');
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
     * @param  \App\admin\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function show(Cutting $cutting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function edit(Cutting $cutting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cutting $cutting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cutting $cutting)
    {
        //
    }
}
