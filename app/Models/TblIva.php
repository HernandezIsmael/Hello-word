<?php

namespace HoneyHope\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblIva
 */
class TblIva extends Model
{
    protected $table = 'tbl_iva';

    protected $primaryKey = 'id_iva';

	public $timestamps = false;

    protected $fillable = [
        'vch_iva'
    ];

    protected $guarded = [];

        
}