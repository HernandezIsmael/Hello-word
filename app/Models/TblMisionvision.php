<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblMisionvision extends CRUD
{
    protected $table = 'tbl_misionvision';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'descripcion'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('id', 'titulo', 'descripcion')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDMisionMision (?,?,?,?)', array($request['id'], $request['titulo'], $request['descripcion'], $request['TipoCrud']));
    }   
}