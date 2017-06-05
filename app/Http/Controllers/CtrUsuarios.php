<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblUsuario;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class CtrUsuarios extends Controller 
{

    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy']]);
    }

    public function find(Route $route){
        $this->Vch_IdUsuario = TblUsuario::Busqueda('vst_usuarios','email',$route->getParameter('Users'));
    }

    public function table(){
        $table = TblUsuario::Consultas('vst_usuarios');
        return response()->json($table);
    }

    public function index(Request $request)
    {
        $tabla = TblUsuario::Consultas('vst_usuarios');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());     
        }
        return view("Admin.Views.Usuarios", compact('tabla'));
    }

    public function Combos(){
        $suc = TblUsuario::Selects("vst_Sucursal", "Sml_IdSucursal", "Sucursal");
        $tipo = TblUsuario::Selects("vst_tuser");
        $cargo = TblUsuario::Selects("vst_cargo");
        $result = array_merge($suc, $tipo, $cargo);
        return response()->json($result);    
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

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblUsuario::CRUDS($request);
            return response()->json($response);
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        return json_encode($this->Vch_IdUsuario[0]->ruta);
    }

    public function update(Request $request)
    {
        if($request->ajax()){
            $response = TblUsuario::CRUDS($request);
            return response()->json($response);    
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblUsuario::CRUDS($request);
            \Storage::delete($this->Vch_IdUsuario[0]->ruta);
            return response()->json($response);    
        }
    }
}
