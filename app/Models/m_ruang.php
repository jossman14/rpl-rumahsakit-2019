<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class m_ruang extends Model
{
    protected $table = 'm_ruang';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'tipe_kamar',
        'kamar',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'tipe_kamar'		=> 'required|string|between:0,30',
        'kamar'	=> 'required|string|between:0,50',
        'status'	=> 'required|integer',
    ];
}
