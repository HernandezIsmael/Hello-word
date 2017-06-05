<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;
/**
 * Class TblTipousuario
 */
class TblTipousuario extends CRUD
{
    protected $table = 'tbl_tipousuario';

    protected $primaryKey = 'Sml_Tipo';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Tipo'
    ];

    protected $guarded = [];

    public static function Busqueda($table,$colum,$param){
        return \DB::table($table)->select('Sml_Tipo','Vch_Tipo')->where($colum,$param)->get();
    }

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDTpUsuario(?,?,?)', array($request['Sml_Tipo'], $request['Vch_Tipo'], $request['TipoCrud']));
    }    
}