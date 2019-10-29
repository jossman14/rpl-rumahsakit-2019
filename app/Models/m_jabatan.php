<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class m_jabatan extends Model
{
    protected $table = 'm_jabatan';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'jabatan', 
        // 'id_jab',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        // 'id_jab'   => 'required|string|between:0,4',
        'jabatan'	=> 'required|string|between:0,50',
    ];
}
