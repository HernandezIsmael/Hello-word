<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;
/**
 * Class TblTipoempresa
 */
class TblTipoempresa extends CRUD
{
    protected $table = 'tbl_tipoempresa';

    protected $primaryKey = 'Sml_Tipo';

	public $timestamps = false;

    protected $fillable = [
        'Vch_TIpo'
    ];

    protected $guarded = [];

   	public static function Busqueda($table,$colum,$param){
        return \DB::table($table)->select('Sml_Tipo','Vch_TIpo')->where($colum,$param)->get();
    }

    public static function CRUDS($request){
    	return \DB::select('call stp_CRUDTpEmpresa (?,?,?)', array($request['Sml_Tipo'], $request['Vch_TIpo'], $request['TipoCrud']));
    }     
}