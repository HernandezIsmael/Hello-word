<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;  
use HoneyHope\Http\Requests;
use HoneyHope\Http\Requests\LoginRequest;
use HoneyHope\Http\Controllers\Controller;

class CtrLogin extends Controller
{

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(LoginRequest $request)
    { 
        if(Auth::attempt(['email' => $request['user'], 'password' => $request['psw']])){
            return response()->json([
                "mensaje" => "encontrado"
            ]);
        }else{
            return response()->json([
                "mensaje" => "no encontrado"
            ]);
        }      
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
