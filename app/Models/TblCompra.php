<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblCompra extends CRUD
{
    protected $table = 'tbl_compras';

    protected $primaryKey = 'Sml_IdArticulo';

	public $timestamps = false;

    protected $fillable = [
        'Vch_NomArticulo',
        'Int_Cantidad',
        'Sml_IdEmpresa',
        'Flt_Precio'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
        return \DB::table($table)->select("Sml_IdArticulo","Vch_NomArticulo", "Int_Cantidad", "Vch_Nombre", "Flt_Precio")->where($colum, $param)->get();
    }

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDCompras (?,?,?,?,?,?)', array($request['Sml_IdArt'], $request['Vch_NomArti'], $request['Int_cant'], $request['Sml_IdEmp'], $request['Flt_prec'], $request['Vch_Tipo']));
    }    
}