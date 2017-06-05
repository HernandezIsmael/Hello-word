<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblRegistromiel extends CRUD
{
    protected $table = 'tbl_registromiel';

    protected $primaryKey = 'Sml_Registro';

	public $timestamps = false;

    protected $fillable = [
        'Sml_IdApiario',
        'Flt_Cantidad',
        'Dtm_Fecha'
    ];

    protected $guarded = [];
	
	public static function Busqueda($table, $colum, $param){
		return \DB::table($table)->select('Sml_Registro', 'Vch_NombreApiario', 'Flt_Cantidad', 'Dtm_Fecha')->where($colum, $param)->get();
	}

	public static function CRUDS($request){
		return \DB::select('call stp_CRUDMiel(?,?,?,?,?)', array($request['Sml_Reg'], $request['Sml_IdApi'], $request['Flt_Cant'], $request['Fecha'], $request['Vch_Tipo']));
	}   
}