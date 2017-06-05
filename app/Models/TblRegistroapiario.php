<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblRegistroapiario extends CRUD
{
    protected $table = 'tbl_registroapiario';

    protected $primaryKey = 'Sml_IdApiario';

	public $timestamps = false;

    protected $fillable = [
        'Vch_NombreApiario',
        'Sml_IdSucursal'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('Sml_IdApiario', 'Vch_NombreApiario', 'Vch_Nombre')->where($colum, $param)->get();
    }
    
    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDApiario(?,?,?,?)', array($request['Sml_IdApi'], $request['Vch_NombreApi'], $request['Sml_IdSucu'], $request['Vch_Tipo']));
    }    
}