<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblTipoproducto;
use Illuminate\Routing\Route;

class Ctr_TipoProd extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Sml_Id = TblTipoproducto::Busqueda('vst_tipopro', 'Sml_TipoProducto', $route->getParameter('TProducto'));
    }

    public function index(Request $request)
    {
        $tabla = TblTipoproducto::Consultas('vst_tipopro');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());     
        }
        return view("Admin.Views.TProductos", compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $table = TblTipoproducto::Consultas('vst_tipopro');
            return response()->json($table);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoproducto::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return response()->json($this->Sml_Id);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoproducto::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoproducto::CRUDS($request);
            return response()->json($response);
        }
    }
}
