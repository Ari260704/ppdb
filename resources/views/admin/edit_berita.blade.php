@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Berita</h2>

    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="6" required>{{ $berita->isi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Berita</label>
            @if ($berita->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" width="200" alt="Gambar berita">
                </div>
            @endif
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
