<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRespuestum
 */
class TblRespuestum extends Model
{
    protected $table = 'tbl_respuesta';

    protected $primaryKey = 'Int_IdRes';

	public $timestamps = false;

    protected $fillable = [
        'Vch_Respuesta',
        'Int_IdPreg'
    ];

    protected $guarded = [];

        
}