<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class rawat_jalan extends Model
{
    protected $table = 'rawat_jalan';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_hasil_pemeriksaan',
        'tanggal',
        'durasi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_hasil_pemeriksaan' => 'required|string|between:0,5',
        'tanggal' => 'required',
        'durasi' => 'required|integer',
    ];
}
