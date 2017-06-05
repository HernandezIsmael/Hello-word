<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblPresentacion;
use Illuminate\Routing\Route;

class CtrPresentacion extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Id = TblPresentacion::Busqueda('vst_presentacion', 'Sml_IdPresentacion', $route->getParameter('Presentacion'));
    }

    public function index(Request $request)
    {
        $tabla = TblPresentacion::Consultas('vst_presentacion');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.Presentacion', compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $pres = TblPresentacion::Consultas('vst_presentacion');
            return response()->json($pres);
        }    
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblPresentacion::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return response()->json($this->Id);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblPresentacion::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblPresentacion::CRUDS($request);
            return response()->json($response);
        }
    }
}
