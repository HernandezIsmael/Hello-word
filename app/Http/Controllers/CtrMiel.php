<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblRegistromiel;
use Illuminate\Routing\Route;

class CtrMiel extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Id = TblRegistromiel::Busqueda('vst_miel', 'Sml_Registro', $route->getParameter('Miel'));
    }

    public function index(Request $request)
    {
        $tabla = TblRegistromiel::Consultas('vst_miel');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());    
        }
        return view('Admin.Views.Miel', compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $miel = TblRegistromiel::Consultas('vst_miel');
            return response()->json($miel);
        }
    }

    public function combo(){
        $api = TblRegistromiel::Selects('vst_apiarios', 'Sml_IdApiario', 'Vch_NombreApiario');
        return response()->json($api);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistromiel::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        return response()->json($this->Id);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistromiel::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblRegistromiel::CRUDS($request);
            return response()->json($response);
        }
    }
}
