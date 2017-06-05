<?php

namespace HoneyHope\Models;
use HoneyHope\Models\CRUD;
/**
 * Class TblCapacidad
 */
class TblCapacidad extends CRUD
{
    protected $table = 'tbl_capacidad';

    protected $primaryKey = 'Sml_IdCapacidad';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Capacidad'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('Sml_IdCapacidad', 'Vch_Capacidad')->where($colum, $param)->get();
    }
    
    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDCapacidad (?,?,?)', array($request['Sml_idCapa'], $request['Vch_Capac'], $request['TipoCrud']));
    } 
}