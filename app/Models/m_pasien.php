<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class m_pasien extends Model
{
    protected $table = 'm_pasien';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'no_rekam_medis',
        'nama_pasien',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_telp',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'no_rekam_medis'		=> 'required|string|between:0,10',
        'nama_pasien'	=> 'required|string|between:0,40',
        'alamat'	=> 'required|string|between:0,100',
        'tanggal_lahir'	=> 'required|date',
        'jenis_kelamin'	=> 'required|string|between:0,1',
        'no_telp'	=> 'required|string|between:0,13',
    ];
}
