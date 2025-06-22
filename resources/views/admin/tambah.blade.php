@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Tambah Berita Baru</h2>

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Berita (opsional)</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
