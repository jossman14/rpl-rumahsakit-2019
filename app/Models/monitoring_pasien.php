<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class monitoring_pasien extends Model
{
    protected $table = 'monitoring_pasien';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_rawat_inap',
        'no_rekam_medis',
        'waktu',
        'keluhan_pasien',
        'tensi',
        'frekuensi_pernapasan',
        'nadi',
        'suhu',
        'tindakan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // public static $rules = [
    //     'id_rekam_medis' => 'required|string|between:0,10',
    //     'id_poli' => 'required|string|between:0,4',
    //     'id_pasien' => 'required|string|between:0,4',
    //     'tanggal_registrasi' => 'required|date',
    //     'jam_registrasi' => 'required|time',
    //     'keluhan' => 'required|text',
    //     'biaya_registrasi' => 'required|integer',
    // ];
}
