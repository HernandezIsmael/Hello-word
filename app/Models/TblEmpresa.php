<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblEmpresa extends CRUD
{
    protected $table = 'tbl_empresa';

    protected $primaryKey = 'Sml_IdEmpresa';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Nombre',
        'Vch_RFC',
        'Vch_Direccion',
        'Vch_Telefono',
        'Vch_Email',
        'Sml_Tipo'
    ];

    protected $guarded = [];

    public static function Busqueda($table, $colum, $param){
        return \DB::table($table)->select('Sml_IdEmpresa', 'Vch_Nombre', 'Vch_RFC', 'Vch_Direccion', 'Vch_Telefono', 'Vch_Email', 'Vch_Tipo')->where($colum, $param)->get();    
    } 

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDEmpresa (?,?,?,?,?,?,?,?)', array($request['Sml_IdEmp'], $request['Vch_Nom'], $request['Vch_rfcc'], $request['Vch_Dire'], $request['Vch_Tel'], $request['Vch_mail'], $request['Sml_Ti'], $request['Vch_Tipo']));
    }    
}