<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'data_ayah';
    protected $fillable = [
     
        // daftar ayah
        'nama_ayah', 'nik_ayah', 'tgl_lahir_ayah', 'pendidikan', 'pekerjaan', 'penghasilan', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan'
    ];
}
