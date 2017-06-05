<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;
use Carbon\Carbon;

class TblImage extends CRUD
{
    protected $table = 'tbl_images';

    protected $primaryKey = 'id_image';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Ruta',
        'Vch_IdProducto'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
    	return \DB::table($table)->select('id_image', 'Vch_Ruta', 'Vch_NombreProducto')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDImages(?,?,?,?)', array($request['Id'], $request['Vch_Ruta'], $request['IdPro'], $request['Vch_Tipo']));
    }
   	
}