<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEstadistico
 */
class TblEstadistico extends Model
{
    protected $table = 'tbl_estadistico';

    protected $primaryKey = 'Int_num';

	public $timestamps = false;

    protected $fillable = [
        'Vch_IdProducto',
        'Int_Identificador'
    ];

    protected $guarded = [];

        
}