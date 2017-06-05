<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblEmpresa;
use Illuminate\Routing\Route;

class CtrEmpresas extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Emp = TblEmpresa::Busqueda('vst_empresa', 'Sml_IdEmpresa', $route->getParameter('Empresas'));
    }

    public function index(Request $request)
    {
        $tabla = TblEmpresa::Consultas("vst_empresa");
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.Empresas', compact('tabla'));
    }

    public function table(){
        $table = TblEmpresa::Consultas("vst_empresa");
        return response()->json($table);
    }

    public function Combos(){
        $combo = TblEmpresa::Selects("vst_tempresa");
        return response()->json($combo);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblEmpresa::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return response()->json($this->Emp);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblEmpresa::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblEmpresa::CRUDS($request);
            return response()->json($response);
        }
    }
}
