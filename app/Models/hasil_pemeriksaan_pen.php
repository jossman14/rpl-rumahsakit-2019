<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class hasil_pemeriksaan_pen extends Model
{
    protected $table = 'hasil_pemeriksaan_pen';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'tanggal_waktu',
        'biaya',
        'catatan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'tanggal_waktu' => 'required|date',
        'biaya' => 'required|integer',
        'catatan' => 'required|text',
    ];
}
