<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Ayah;
use App\Models\Ibu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    public function index()
    {
        return view('user/daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Validasi data siswa
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'no_akta' => 'required',
            'agama' => 'required',
            'disabilitas' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'tinggal' => 'required',
            'transportasi' => 'required',
            'anak_ke' => 'required|numeric',
            'nik' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email',
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg|max:2048',

            // Validasi data ayah
            'nama_lengkap_ayah' => 'required',
            'nik_ayah' => 'required',
            'tgl_lahir_ayah' => 'required|date',
            'alamat_ayah' => 'required',
            'rt_ayah' => 'required',
            'rw_ayah' => 'required',
            'kelurahan_ayah' => 'required',
            'kecamatan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',

            // Validasi data ibu
            'nama_lengkap_ibu' => 'required',
            'nik_ibu' => 'required',
            'tgl_lahir_ibu' => 'required|date',
            'alamat_ibu' => 'required',
            'rt_ibu' => 'required',
            'rw_ibu' => 'required',
            'kelurahan_ibu' => 'required',
            'kecamatan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
        ]);

        // Upload foto siswa
        $foto = $request->file('foto_siswa');
        $fotoName = time() . '_' . $foto->getClientOriginalName();
        $fotoPath = $foto->storeAs('public/foto_siswa', $fotoName);

        // Simpan data siswa
        $siswa = Siswa::create([
            'nama' => $request->nama_lengkap,
            'nisn' => $request->nisn,
            'jkelamin' => $request->jenis_kelamin,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_akta' => $request->no_akta,
            'agama' => $request->agama,
            'disabilitas' => $request->disabilitas,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'tinggal_brsm' => $request->tinggal,
            'transportasi' => $request->transportasi,
            'anak_ke' => $request->anak_ke,
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            // 'created_at' => format('d M Y'),
            'foto_siswa' => 'foto_siswa/' . $fotoName,
        ]);

        // Simpan data ayah
        Ayah::create([
            'siswa_id' => $siswa->id,
            'nama_ayah' => $request->nama_lengkap_ayah,
            'nik_ayah' => $request->nik_ayah,
            'tgl_lahir_ayah' => $request->tgl_lahir_ayah,
            'alamat' => $request->alamat_ayah,
            'rt' => $request->rt_ayah,
            'rw' => $request->rw_ayah,
            'kelurahan' => $request->kelurahan_ayah,
            'kecamatan' => $request->kecamatan_ayah,
            'pendidikan' => $request->pendidikan_ayah,
            'pekerjaan' => $request->pekerjaan_ayah,
            'penghasilan' => $request->penghasilan_ayah,
        ]);

        // Simpan data ibu
        Ibu::create([
            'siswa_id' => $siswa->id,
            'nama_ibu' => $request->nama_lengkap_ibu,
            'nik_ibu' => $request->nik_ibu,
            'tgl_lahir_ibu' => $request->tgl_lahir_ibu,
            'alamat' => $request->alamat_ibu,
            'rt' => $request->rt_ibu,
            'rw' => $request->rw_ibu,
            'kelurahan' => $request->kelurahan_ibu,
            'kecamatan' => $request->kecamatan_ibu,
            'pendidikan' => $request->pendidikan_ibu,
            'pekerjaan' => $request->pekerjaan_ibu,
            'penghasilan' => $request->penghasilan_ibu,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan!');
    }
}
