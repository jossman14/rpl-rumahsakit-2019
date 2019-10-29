<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class resep extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_obat',
        'dosis',
        'biaya',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_obat'		=> 'required|string|between:0,4',
        'dosis'	=> 'required|string|between:0,10',
        'biaya'	=> 'required|string|between:0,10',
        'status'	=> 'required|string|between:0,10',
    ];
}
