<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class registrasi_pasien extends Model
{
    protected $table = 'registrasi_pasien';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_user',
        'id_poli',
        'id_pasien',
        'tanggal_registrasi',
        'jam_registrasi',
        'keluhan',
        'biaya_registrasi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'kode_user' => 'required|string|between:0,10',
        'id_poli' => 'required|string|between:0,4',
        'id_pasien' => 'required|string|between:0,4',
        'tanggal_registrasi' => 'required|date',
        'jam_registrasi' => 'required|time',
        'keluhan' => 'required|text',
        'biaya_registrasi' => 'required|integer',
    ];
}
