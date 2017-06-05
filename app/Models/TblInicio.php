<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblInicio extends CRUD
{
    protected $table = 'tbl_inicio';

    public $timestamps = false;

    protected $fillable = [
        'Vch_Titulo',
        'Vch_RutaImagen',
        'Vch_Descripcion'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('id', 'Vch_Titulo', 'Vch_RutaImagen', 'Vch_Descripcion')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDInicio (?,?,?,?,?)', array($request['id'], $request['titulo'], $request['imagen'], $request['descripcion'], $request['TipoCrud']));
    }
        
}