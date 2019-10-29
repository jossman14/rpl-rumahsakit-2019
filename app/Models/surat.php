<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class surat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_hasil_pemeriksaan',
        'no_surat',
        'tanggal',
        'jenis',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_hasil_pemeriksaan' => 'required|string|between:0,5',
        'no_surat' => 'required|string|between:0,15',
        'tanggal' => 'required|date',
        'jenis' => 'required|string|between:0,20',
    ];
}
