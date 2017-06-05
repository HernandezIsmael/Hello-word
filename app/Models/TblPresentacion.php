<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblPresentacion extends CRUD
{
    protected $table = 'tbl_presentacion';

    protected $primaryKey = 'Sml_IdPresentacion';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Presentacion'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('Sml_IdPresentacion','Vch_Presentacion')->where($colum, $param)->get();
    }
    
    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDPresentacion (?,?,?)', array($request['Sml_IdPres'], $request['Vch_Prese'], $request['TipoCrud']));
    }    
}