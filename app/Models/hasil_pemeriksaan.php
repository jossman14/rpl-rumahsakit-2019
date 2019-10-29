<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class hasil_pemeriksaan extends Model
{
    protected $table = 'hasil_pemeriksaan';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_registrasi',
        'id_surat',
        'id_hasil_pemeriksaan_pen',
        'tanggal_waktu',
        'biaya',
        'diagnosis',
        'anamnesis',
        'pemeriksaan_fisik',
        'tindakan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_registrasi' => 'required|string|between:0,5',
        'id_surat' => 'required|string|between:0,4',
        'id_hasil_pemeriksaan_pen' => 'required|string|between:0,5',
        'tanggal_waktu' => 'required|date',
        'biaya' => 'required|integer',
        'diagnosis' => 'required|string|between:0,50',
        'anamnesis' => 'required|string|between:0,50',
        'pemeriksaan_fisik' => 'required|string|between:0,100',
        'tindakan' => 'required|string|between:0,100',
    ];
}
