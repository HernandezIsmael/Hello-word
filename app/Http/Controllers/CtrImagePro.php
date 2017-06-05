<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblImage;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class CtrImagePro extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy']]);
    }

    public function find(Route $route){
        $this->Id = TblImage::Busqueda('vst_images', 'id_image', $route->getParameter('imagespro'));
    }

    public function index(Request $request)
    {
        $tabla = TblImage::Consultas('vst_images');
        if($request->ajax()){
            return response()->json(view('Admin.pagination.tuserpag',compact('tabla'))->render());    
        }
        return view("Admin.Views.CargaImagenes", compact('tabla'));
    }

    public function table(){
        $table = TblImage::Consultas('vst_images');
        return response()->json($table);
    }

    public function combo(){
        $combo = TblImage::Selects('vst_producto', 'Vch_IdProducto', 'Vch_NombreProducto');
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
            $response = TblImage::CRUDS($request);
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
            $response = TblImage::CRUDS($request);
            return response()->json($response);    
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $response = TblImage::CRUDS($request);
            \Storage::delete($this->Id[0]->Vch_Ruta);
            return response()->json($response);  
        }
    }
}
