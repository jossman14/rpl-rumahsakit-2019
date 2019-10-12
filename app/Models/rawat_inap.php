<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class rawat_inap extends Model
{
    protected $table = 'rawat_inap';
    protected $primaryKey = 'id_rawat_inap';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_hasil_pemeriksaan',
        'tanggal_masuk',
        'tanggal_keluar',
        'biaya_rawat_inap',
        'ruang',
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
