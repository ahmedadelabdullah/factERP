<?php

namespace App\Http\Controllers\admin;

use App\admin\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientloginRrequest;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function clientRegister()
    {
        return view('admin.pages.clients.register');
    }

    public function createClientRegister(ClientRegisterRequest $request)
    {

        $data=$request->all();
        $password = $data['password'];
        $client = Client::create($request->all());

        if(auth('clients')->attempt(['email' =>$request->get('email') , 'password' => $request->get('password')]))
        {
            return redirect('supplier');
        }
        abort(401);
    }

    public function clientLogin()
    {
        return view('admin.pages.clients.login');
    }

    public function createClientLogin(ClientloginRrequest $request)
    {
        if(auth('clients')->attempt(['email' => $request->get('email') , 'password' => $request->get('password')]))
        {
            return redirect('supplier');
        }
        return back()->withErrors('clients');
    }





}
