<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblTipoproducto extends CRUD
{
    protected $table = 'tbl_tipoproducto';

    protected $primaryKey = 'Sml_TipoProducto';

	public $timestamps = false;

    protected $fillable = [
        'Vch_TipoProducto'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('Sml_TipoProducto', 'Vch_TipoProducto')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDTipo (?,?,?)', array($request['Sml_IdTip'], $request['Vch_Tipopro'], $request['TipoCrud']));
    }
        
}