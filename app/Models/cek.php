<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cek extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_pendaftar';
    protected $fillable = [
        // daftar siswa
        'nama', 'nisn', 'jkelamin', 'no_akta', 'agama', 'disabilitas', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan', 'tinggal_brsm', 'transportasi', 'anak_ke', 'tmpt_lahir', 'tgl_lahir', 'email', 'foto_siswa', 'nik','status_siswa'
        
    ];

}
