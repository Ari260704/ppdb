<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
        // Data siswa
        'nama_lengkap', 'jenis_kelamin', 'nisn', 'nik', 'tmpt_lahir', 'tgl_lahir',
        'no_akta', 'agama', 'disabilitas', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan',
        'tinggal', 'transportasi', 'anak_ke', 'no_telp', 'email', 'foto_siswa',

        // Data ayah
        'nama_lengkap_ayah', 'nik_ayah', 'tgl_lahir_ayah', 'alamat_ayah', 'rt_ayah', 'rw_ayah',
        'kelurahan_ayah', 'kecamatan_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah',

        // Data ibu
        'nama_lengkap_ibu', 'nik_ibu', 'tgl_lahir_ibu', 'alamat_ibu', 'rt_ibu', 'rw_ibu',
        'kelurahan_ibu', 'kecamatan_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu',
    ];
}