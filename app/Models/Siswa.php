<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'data_pendaftar';

    protected $primaryKey = 'nisn'; // tambahkan ini
    public $incrementing = false;   // kalau bukan auto increment
    protected $keyType = 'string';  // kalau nisn string

    protected $fillable = [
        'nama', 'nisn', 'jkelamin', 'no_akta', 'agama', 'disabilitas', 'alamat', 'rt', 'rw',
        'kelurahan', 'kecamatan', 'tinggal_brsm', 'transportasi', 'anak_ke', 'tmpt_lahir',
        'tgl_lahir', 'nik', 'no_telp', 'email', 'foto_siswa', 'created_at','status_siswa', 
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
