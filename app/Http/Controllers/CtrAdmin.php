<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblUsuario;
use Illuminate\Routing\Route;

class CtrAdmin extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit']]);
    }

    public function find(Route $route){
        $this->datos = TblUsuario::Busqueda('vst_usuarios', 'name', $route->getParameter('Admin'));
    }

    public function index()
    {       
        return view('Admin.Admin');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        if($request->ajax()){
            return response()->json($this->datos);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
