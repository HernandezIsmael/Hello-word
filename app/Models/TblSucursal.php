<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSucursal
 */
class TblSucursal extends Model
{
    protected $table = 'tbl_sucursal';

    protected $primaryKey = 'Sml_IdSucursal';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Nombre',
        'Vch_Direccion',
        'Vch_Telefono'
    ];

    protected $guarded = [];

        
}