<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class rawat_inap extends Model
{
    protected $table = 'rawat_inap';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_registrasi',
        'id_hasil_pemeriksaan',
        'tanggal_masuk',
        'tanggal_keluar',
        'hari',
        'biaya_rawat_inap',
        'total_biaya_rawat_inap',
        'ruang',
        'status_rawat_inap'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_hasil_pemeriksaan' => 'required|string|between:0,5',
        'tanggal_masuk' => 'required',
        'tanggal_keluar' => 'required',
        'biaya_rawat_inap' => 'required|integer',
        'ruang' => 'required|string|between:0,15',
    ];
}
