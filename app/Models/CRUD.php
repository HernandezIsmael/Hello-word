<?php
namespace HoneyHope\Models;
use Illuminate\Database\Eloquent\Model;

abstract class CRUD extends Model {
	
	public static function Selects($query, $columvalue = null, $columdata = null){
		if($columvalue != null && $columdata != null){
			return \DB::table($query)->select($columvalue,$columdata)->get();	
		}else{
			return \DB::table($query)->get();
		}
	}

	public static function Consultas($query){
		return \DB::table($query)->paginate(5);
	}

	public static function Busqueda($table,$colum,$param){}

	public static function CRUDS($request){}
}