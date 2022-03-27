<?php

namespace App\Http\Controllers\admin;

use App\admin\Ore;
use App\admin\TexesInfo;
use App\admin\TexesInvoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.ores.index',
        [
            'infos' => TexesInfo::paginate(5),
        ]
        );
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
     * @param  \App\admin\Ore  $ore
     * @return \Illuminate\Http\Response
     */
    public function show(Ore $ore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Ore  $ore
     * @return \Illuminate\Http\Response
     */
    public function edit(Ore $ore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Ore  $ore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ore $ore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Ore  $ore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ore $ore)
    {
        //
    }
}
