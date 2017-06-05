<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblCargo extends CRUD
{
    protected $table = 'tbl_cargo';

    protected $primaryKey = 'Sml_Cargo';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Cargo'
    ];

    protected $guarded = [];
    
    public static function Busqueda($table,$colum,$param){
        return \DB::table($table)->select('Sml_Cargo','Vch_Cargo')->where($colum,$param)->get();
    }

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDCargo(?,?,?)', array($request['Sml_Cargo'], $request['Vch_Cargo'], $request['TipoCrud']));
    }
}