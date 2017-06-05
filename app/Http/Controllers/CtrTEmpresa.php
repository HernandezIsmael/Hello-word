<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblTipoempresa;
use Illuminate\Routing\Route;

class CtrTEmpresa extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Ent = TblTipoempresa::Busqueda('vst_tempresa','Sml_Tipo',$route->getParameter('TEmpresa'));
    }

    public function index(Request $request)
    {
        $tabla = TblTipoempresa::Consultas("vst_tempresa");
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.TipoEmpresa', compact('tabla'));
    }

    public function table(){
        $table = TblTipoempresa::Consultas("vst_tempresa");
        return response()->json($table);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoempresa::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return response()->json($this->Ent);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoempresa::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblTipoempresa::CRUDS($request);
            return response()->json($response);
        }
    }
}
