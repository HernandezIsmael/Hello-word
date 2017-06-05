<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblCapacidad;
use Illuminate\Routing\Route;

class CtrCapacidad extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Sml_Id = TblCapacidad::Busqueda('vst_capacidad','Sml_IdCapacidad',$route->getParameter('Capc'));
    }

    public function index(Request $request)
    {
        $tabla = TblCapacidad::Consultas('vst_capacidad');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.Capacidad', compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $capa = TblCapacidad::Consultas('vst_capacidad');
            return response()->json($capa);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblCapacidad::CRUDS($request);
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
            $response = TblCapacidad::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblCapacidad::CRUDS($request);
            return response()->json($response);
        }
    }
}