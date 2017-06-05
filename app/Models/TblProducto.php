<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

/**
 * Class TblProducto
 */
class TblProducto extends CRUD
{
    protected $table = 'vst_producto';

    protected $primaryKey = 'Vch_IdProducto';

	public $timestamps = false;

    protected $fillable = [
        'Vch_NombreProducto',
        'Sml_IdCapacidad',
        'Sml_IdPresentacion',
        'Sml_TipoProducto',
        'Vch_Resumen',
        'Vch_Descripcion',
        'Flt_PrecioUnitario',
        'Int_Cantidad',
        'id_iva'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
        return \DB::table($table)->select('Vch_IdProducto', 'Vch_NombreProducto', 'Vch_Capacidad', 'Vch_Presentacion', 'Vch_TipoProducto', 'Vch_Resumen', 'Vch_Descripcion', 'Flt_PrecioUnitario', 'Int_Cantidad', 'IVA')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDProducto(?,?,?,?,?,?,?,?,?,?,?)', array($request['Vch_IdPro'], $request['Vch_NomProd'], $request['Sml_IdCap'], $request['Sml_IdPres'], $request['Sml_Tipoo'], $request['Vch_Res'], $request['Vch_Des'], $request['Flt_PreUni'], $request['Int_Cant'], $request['IVAA'], $request['Vch_Tipo']));
    }
}