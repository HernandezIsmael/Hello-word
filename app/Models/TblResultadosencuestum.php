<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblResultadosencuestum
 */
class TblResultadosencuestum extends Model
{
    protected $table = 'tbl_resultadosencuesta';

    protected $primaryKey = 'Int_IdResultado';

	public $timestamps = false;

    protected $fillable = [
        'Int_IdRes',
        'Dtm_Fecha',
        'Int_Clasificacion'
    ];

    protected $guarded = [];

        
}