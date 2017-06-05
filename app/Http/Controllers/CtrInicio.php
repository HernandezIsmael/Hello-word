<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblInicio;

class CtrInicio extends Controller
{

    public function index(Request $request)
    {
        $view = View::make('public.inicio');
        if($request->ajax()){
            $section = $view->renderSections();
            return response()->json($section['contenido']);
        }else{
            return $view;
        }
    }

    public function nosotros(Request $request){
        $view = View::make('public.Mision_vision');
        $section = $view->renderSections();
        if($request->ajax()){
            return response()->json($section['contenido']);
        }else{
            return $view;
        }   
    }

    public function visitanos(Request $request){
        $view = View::make('public.nsucursales');
        if($request->ajax()){
            $section = $view->renderSections();
            return response()->json($section['contenido']);
        }else{
            return $view;
        }    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function inicio(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
