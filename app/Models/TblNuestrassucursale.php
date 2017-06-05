<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblNuestrassucursale extends CRUD
{
    protected $table = 'tbl_nuestrassucursales';

    public $timestamps = false;

    protected $fillable = [
        'ruta',
        'horarios',
        'Sml_IdSucursal'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('id', 'ruta', 'horarios', 'Sucursal')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDnSucursales (?,?,?,?,?)', array($request['idkey'], $request['img_ruta'], $request['hrs'], $request['id_suc'], $request['TipoCrud']));
    }
        
}