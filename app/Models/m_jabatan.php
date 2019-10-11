<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_jabatan extends Model
{
    protected $table = 'm_jabatan';
    protected $primaryKey = 'id_jab';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'jabatan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'jabatan'	=> 'required|string|between:0,50',
    ];
}
