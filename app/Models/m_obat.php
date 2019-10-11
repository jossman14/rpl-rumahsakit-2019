<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_obat extends Model
{
    protected $table = 'm_obat';
    protected $primaryKey = 'id_jab';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nama_obat',
        'harga_obat',
        'status_obat',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'nama_obat'		=> 'required|string|between:0,30',
        'harga_obat'	=> 'required|integer',
        'status_obat'	=> 'required|integer',
    ];
}
