<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblInicio;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class CtrCardInicio extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy']]);
    }

    public function find(Route $route){
        $this->Id = TblInicio::Busqueda('tbl_inicio', 'id', $route->getParameter('cardsinicio'));
    }

    public function index(Request $request)
    {
        $tabla = TblInicio::Consultas('tbl_inicio');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());     
        }
        return view("Admin.ConfPublic.confinicio", compact('tabla'));
    }

    public function table(){
        $table = TblInicio::Consultas('tbl_inicio');
        return response()->json($table);
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblInicio::CRUDS($request);
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
            $response = TblInicio::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblInicio::CRUDS($request);
            \Storage::delete($this->Id[0]->Vch_RutaImagen);
            return response()->json($response);
        }
    }
}
