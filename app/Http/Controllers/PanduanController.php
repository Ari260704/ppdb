<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;

use Illuminate\Http\Request;

class PanduanController extends Controller
{

    public function user()
    {
        $pengumuman = Pengumuman::where('status', 'aktif')->first() ?? new \App\Models\Pengumuman();

        // dd($pengumuman);
       
        return view('user/panduan', compact('pengumuman'));
    }
    public function index()
    {
        $pengumuman = pengumuman::get();
        // dd($pengumuman);
        return view('admin.pengumuman', compact('pengumuman'));
    }


    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        // dd($request->isi);
        Pengumuman::create([
            'isi' => $request->isi

        ]);

        return redirect()->back()->with('success', 'Pengumuman berhasil disimpan!');

        Pengumuman::create($data);
        return redirect()->route('admin.create')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.edit_berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $data = Pengumuman::find($id);
        $data->status = 'Aktif';
        $data->save();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function disable(Request $request, $id)
    {
        $data = Pengumuman::find($id);
        $data->status = 'nonaktif';
        $data->save();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')->with('success', 'Berita berhasil dihapus');
    }
}
