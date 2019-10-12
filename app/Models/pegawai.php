<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_user',
        'role',
        'id_jab',
        'nip',
        'nama_pegawai',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'kode_user' => 'required|string|between:0,10',
        'role' => 'required|string|between:0,10',
        'id_jab' => 'required|string|between:0,4',
        'nip' => 'required|string|between:0,30',
        'nama_pegawai' => 'required|string|between:0,40',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required|string|between:0,100',
        'jenis_kelamin' => 'required|string|between:0,1',
    ];
}
