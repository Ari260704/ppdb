<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'data_ibu';
    protected $fillable = [
        
        // daftar ibu
        'nama_ibu', 'nik_ibu', 'tgl_lahir_ibu', 'pendidikan', 'pekerjaan', 'penghasilan','alamat', 'rt', 'rw', 'kelurahan', 'kecamatan'
    ];
}
