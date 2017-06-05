<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblNuestrassucursale;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class CtrNSucursales extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy']]);
    }

    public function find(Route $route){
        $this->Id = TblNuestrassucursale::Busqueda('vst_nsucursales', 'id', $route->getParameter('nuestrassucursales'));
    }

    public function index(Request $request)
    {
        $tabla = TblNuestrassucursale::Consultas('vst_nsucursales');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());         
        }
        return view("Admin.ConfPublic.confnsucursales", compact('tabla'));
    }

    public function table(){
        $table = TblNuestrassucursale::Consultas('vst_nsucursales');
        return response()->json($table);
    }

    public function combo(){
        $combo = TblNuestrassucursale::Selects('vst_sucursal', 'Sml_IdSucursal', 'Sucursal');
        return response()->json($combo); 
    }

    public function create()
    {
        //
    }

    public function subirimagen(Request $request){
        $archivo = $request->Vch_Ruta;
        if($request->hasFile('Vch_Ruta')){
            $path = public_path()."/images/";
            $name = Carbon::now()->second.$archivo->getClientOriginalName();
            $archivo->move($path, $name);
            return response()->json([
                "nombre" => $name
            ]);

        }else{
            return response()->json([
                "nombre" => "error"
            ]);
        }
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblNuestrassucursale::CRUDS($request);
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
            $response = TblNuestrassucursale::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblNuestrassucursale::CRUDS($request);
            \Storage::delete($this->Id[0]->ruta);
            return response()->json($response);  
        }
    }
}
