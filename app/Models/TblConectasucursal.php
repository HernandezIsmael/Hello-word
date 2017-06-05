<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblConectasucursal
 */
class TblConectasucursal extends Model
{
    protected $table = 'tbl_conectasucursal';

    protected $primaryKey = 'Sml_IdCon';

	public $timestamps = false;

    protected $fillable = [
        'Sml_IdSucursal',
        'Vch_NombreServidor',
        'Vch_NombreBase',
        'Vch_Usuario',
        'Vch_Pasww'
    ];

    protected $guarded = [];

        
}