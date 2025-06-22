<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class AdminController extends Controller
{
    public function index()
    {
        $totalPendaftar = Siswa::count();
        $sudahDiverifikasi = Siswa::whereIn('status_siswa',['terima', 'tidak terima'])->count();
        $belumDiverifikasi = Siswa::where('status_siswa', 'draf')->count();

        $aktivitasTerbaru = Siswa::latest()
            ->take(5)
            ->get();
        // dd($totalPendaftar);
        return view('admin.dashboard', [
            'totalPendaftar' => $totalPendaftar,
            'sudahDiverifikasi' => $sudahDiverifikasi,
            'belumDiverifikasi' => $belumDiverifikasi,
            'aktivitasTerbaru' => $aktivitasTerbaru
        ]);
    }

    // Tambahkan method terpisah untuk pendaftar jika diperlukan
    public function pendaftar()
    {
        $data = Siswa::latest()->get();
        return view('admin.pendaftar', compact('data'));
    }

    public function edit($nisn)
    {
        $siswa = Siswa::where('nisn', $nisn)->firstOrFail();
        return view('admin.edit', compact('siswa'));
    }

    // verifikasi
    public function detail($id){
        $detail = Siswa::where('id', $id)->first();
        // dd($s);
        return view('admin.detail', compact("detail"));

    }
    public function updateStatus(Request $request){
        // dd('test');
        Siswa::where('id', $request->id)
             ->update([
                    'status_siswa' => $request->status_siswa,       
             ]);
         return redirect()->back()->with('Success', 'Status Berhasil Di Update!');

    }

    public function destroy($id){
        Siswa::where('id',$id)->delete();
          return back();
    }
}
