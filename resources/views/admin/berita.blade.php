@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Manajemen Berita</h2>

    <a href="{{ route('admin.berita.create') }}" class="btn btn-success mb-3">+ Tambah Berita</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Isi (Singkat)</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($beritas as $index => $berita)
                <tr>
                    <td>{{ $loop->iteration + ($beritas->currentPage() - 1) * $beritas->perPage() }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td style="max-width: 100px;">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid" style="max-height: 80px;">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>{{ Str::limit(strip_tags($berita->isi), 80) }}</td>
                    <td>{{ $berita->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $berita) }}" class="btn btn-warning btn-sm mb-1">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Belum ada berita yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $beritas->links() }}
    </div>
</div>
@endsection
