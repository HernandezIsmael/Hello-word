<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblVentadetalle
 */
class TblVentadetalle extends Model
{
    protected $table = 'tbl_ventadetalle';

    public $timestamps = false;

    protected $fillable = [
        'Int_Venta',
        'Vch_IdProducto',
        'Flt_Iva',
        'Flt_PrecioUnitario',
        'Int_Cantidad',
        'Flt_Importe'
    ];

    protected $guarded = [];

        
}