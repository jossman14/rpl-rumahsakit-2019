<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class jadwal_dokter extends Model
{
    protected $table = 'jadwal_dokter';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_pegawai',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_pegawai'		=> 'required|string|between:0,5',
        'hari'	=> 'required|string|between:0,30',
        'jam_mulai'	=> 'required|time',
        'jam_selesai' => 'required|time',
    ];
}
