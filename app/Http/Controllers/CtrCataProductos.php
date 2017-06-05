<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class CtrCataProductos extends Controller
{


     public function index()
    {
         $productos = \DB::select('select * from vst_producto');
        return view('public.CatProduct',compact('productos'));
    }

     public function show($slug)
    {
        $productos = \DB::select("SELECT * FROM vst_producto WHERE Vch_IdProducto='".$slug."'");
        return view('public.Detalles_pro', compact('productos'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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