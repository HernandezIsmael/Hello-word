<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblProducto;
use Illuminate\Routing\Route;

class CtrProductos extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Id = TblProducto::Busqueda('vst_producto', 'Vch_IdProducto',$route->getParameter('Productos'));
    }

    public function index(Request $request)
    {
        $tabla = TblProducto::Consultas('vst_producto');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view("Admin.Views.Productos", compact('tabla'));
    }

    public function table(Request $request){
        if($request->ajax()){
            $prod = TblProducto::Consultas('vst_producto');
            return response()->json($prod);
        }
    }

    public function combos(){
        $capacidad = TblProducto::Selects('vst_capacidad');
        $presentacion = TblProducto::Selects('vst_presentacion');
        $tipo = TblProducto::Selects('vst_tipopro');
        $iva = TblProducto::Selects('tbl_iva');
        $result = array_merge($capacidad, $presentacion, $tipo, $iva);
        return response()->json($result);    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblProducto::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return response()->json($this->Id);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblProducto::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblProducto::CRUDS($request);
            return response()->json($response);
        }
    }
}
