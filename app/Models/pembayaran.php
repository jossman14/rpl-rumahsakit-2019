<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_hasil_pemeriksaan',
        'id_rawat_inap',
        'id_resep',
        'tanggal_jam',
        'total',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_hasil_pemeriksaan' => 'required|string|between:0,4',
        'id_rawat_inap' => 'required|string|between:0,30',
        'id_resep' => 'required|string|between:0,40',
        'tanggal_jam' => 'required',
        'total' => 'required|string|between:0,15',
    ];
}
