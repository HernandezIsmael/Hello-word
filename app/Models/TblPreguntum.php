<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPreguntum
 */
class TblPreguntum extends Model
{
    protected $table = 'tbl_pregunta';

    protected $primaryKey = 'Int_IdPreg';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Pregunta',
        'Vch_IdProducto'
    ];

    protected $guarded = [];

        
}