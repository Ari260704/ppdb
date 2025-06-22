@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Tambah Berita Baru</h2>

    <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="isi" class="form-label">Teks Pengumuman</label>
            <textarea class="form-control" name="isi" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
