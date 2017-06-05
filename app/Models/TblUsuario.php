<?php

namespace HoneyHope\Models;

use HoneyHope\Models\CRUD;

class TblUsuario extends CRUD
{
    protected $table = 'tbl_usuarios';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'Vch_Nombre',
        'email',
        'Vch_Ap',
        'Vch_Am',
        'Vch_Telefono',
        'Vch_Sexo',
        'Vch_RFC',
        'Sml_IdSucursal',
        'Sml_Tipo',
        'Sml_Cargo',
        'Vch_Imagen',
        'password'
    ];

    protected $guarded = [];
    
    public static function Busqueda($table,$colum,$param){
        return \DB::table($table)->select('name','Nombre','email','Ap','Am','tel','sex','rfc','sucursal','tipo','cargo','ruta')->where($colum, $param)->get();
    }

    public static function CRUDS($request){
        return \DB::select('call stp_CRUDUsuario(?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($request['vch_user'], $request['nombre'], $request['mail'], $request['ap'], $request['am'], $request['telefono'], $request['sexo'], $request['rfc'], $request['id_sucursal'], $request['id_tipo'], $request['id_cargo'], $request['ruta'], \Hash::make($request['password']) , $request['Vch_Tipo']));
    }
}