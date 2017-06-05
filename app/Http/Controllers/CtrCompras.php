<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblCompra;
use Illuminate\Routing\Route;
class CtrCompras extends Controller
{

    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Sml_Id = TblCompra::Busqueda('vst_compras','Sml_IdArticulo',$route->getParameter('Compras'));
    }
    
    public function index(Request $request)
    {
        $tabla = TblCompra::Consultas("vst_compras");
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view("Admin.Views.Compras", compact('tabla'));

    }

    public function table(Request $request){
        if($request->ajax()){
            $compra = TblCompra::Consultas('vst_compras');
            return response()->json($compra);
        }
    }

    public function combo(){
        $enter = TblCompra::Selects('vst_empresa', 'Sml_IdEmpresa', 'Vch_Nombre');
        return response()->json($enter);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblCompra::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
            
    }

    public function edit($id)
    {
        return response()->json($this->Sml_Id);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblCompra::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblCompra::CRUDS($request);
            return response()->json($response);
        }
    }
}
