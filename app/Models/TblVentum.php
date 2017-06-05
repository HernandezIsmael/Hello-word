<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblVentum
 */
class TblVentum extends Model
{
    protected $table = 'tbl_venta';

    protected $primaryKey = 'Int_Venta';

	public $timestamps = false;

    protected $fillable = [
        'Int_TotalArticulos',
        'Flt_Total',
        'Dtm_FechaVenta'
    ];

    protected $guarded = [];

        
}