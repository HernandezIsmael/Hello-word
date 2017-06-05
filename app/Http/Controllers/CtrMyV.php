<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblMisionvision;
use Illuminate\Routing\Route;

class CtrMyV extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->Id = TblMisionvision::Busqueda('tbl_misionvision', 'id', $route->getParameter('misionvision'));
    }

    public function index(Request $request)
    {
        $tabla = TblMisionvision::Consultas('tbl_misionvision');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());    
        }
        return view("Admin.ConfPublic.confmyv", compact('tabla'));    
    }

    public function table(){
        $table = TblMisionvision::Consultas('tbl_misionvision');
        return response()->json($table);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $response = TblMisionvision::CRUDS($request);
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
            $response = TblMisionvision::CRUDS($request);
            return response()->json($response);
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblMisionvision::CRUDS($request);
            return response()->json($response);
        }
    }
}
