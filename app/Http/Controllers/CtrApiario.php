<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;
use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblRegistroapiario;
use Illuminate\Routing\Route;

class CtrApiario extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->api = TblRegistroapiario::Busqueda('vst_apiarios', 'Sml_IdApiario', $route->getParameter('Apiarios'));
    }

    public function index(Request $request)
    {
        $tabla = TblRegistroapiario::Consultas('vst_apiarios');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.Apiarios' , compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $apiarios = TblRegistroapiario::Consultas('vst_apiarios');
            return response()->json($apiarios);
        }
    }

    public function Combo(){
        $api = TblRegistroapiario::Selects('vst_sucursal', 'Sml_IdSucursal', 'Sucursal');
        return response()->json($api);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistroapiario::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return response()->json($this->api);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistroapiario::CRUDS($request);
            return response()->json($response);
        }    
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistroapiario::CRUDS($request);
            return response()->json($response);
        }   
    }
}
