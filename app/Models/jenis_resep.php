<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class jenis_resep extends Model
{
    protected $table = 'jenis_resep';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_resep',
        'id_obat',
        'jenis',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_resep'		=> 'required|string|between:0,5',
        'id_obat'	=> 'required|string|between:0,4',
        'jenis'	=> 'required|string|between:0,20',
    ];
}
