<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;
use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblTipousuario;
use Redirect;
use Illuminate\Routing\Route;

class CtrlTipoUser extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Sml_Id = TblTipousuario::Busqueda('vst_tuser','Sml_Tipo',$route->getParameter('TUser'));
    }

    public function index(Request $request)
    {
        $tabla = TblTipousuario::Consultas("vst_tuser");
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());
        }
        return view('Admin.Views.TUser', compact('tabla'));
    }

    public function tabla(Request $request){
        if($request->ajax()){
            $tipo = TblTipousuario::Consultas("vst_tuser");
            return response()->json($tipo);       
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblTipousuario::CRUDS($request);
            return response()->json(
                $response
            );
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
            $response = TblTipousuario::CRUDS($request);
            return response()->json(
                $response
            );
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblTipousuario::CRUDS($request); 
            return response()->json($response);   
        }
    }
}