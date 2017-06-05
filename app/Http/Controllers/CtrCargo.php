<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblCargo;
use Illuminate\Routing\Route;
class CtrCargo extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Sml_Cargo = TblCargo::Busqueda('vst_cargo','Sml_Cargo',$route->getParameter('Cargo'));
    }

    public function index(Request $request)
    {
        $tabla = TblCargo::Consultas("vst_cargo");
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());    
        }
        return view("Admin.Views.Cargo", compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $table = TblCargo::Consultas("vst_cargo");
            return response()->json($table);
        }
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblCargo::CRUDS($request);
            return response()->json($response);    
        }
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return response()->json($this->Sml_Cargo);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblCargo::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblCargo::CRUDS($request);
            return response()->json($response);
        }
    }
}
