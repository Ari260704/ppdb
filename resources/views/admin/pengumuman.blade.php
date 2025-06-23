@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Manajemen Pengumuman</h2>

    <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-success mb-3">
        + Tambah Pengumuman
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-success">
                <tr class="text-center">
                    <th>No</th>
                    <th>Teks Pengumuman</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pengumuman as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->isi }}</td>
                        <td class="text-center">
                            <span class="badge bg-{{ $item->status == 'aktif' ? 'success' : 'secondary' }}">
                                {{ ucfirst($item->status) }}
                            </span>
                        </td>
                        <td class="text-center">
                            {{-- Tombol Aktifkan --}}
                            <form action="{{ route('admin.status_pengumuman.update', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin mengaktifkan pengumuman ini?')">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-sm btn-primary mb-1">Aktif</button>
                            </form>

                            {{-- Tombol Nonaktifkan --}}
                            <form action="{{ route('admin.status_pengumuman.disable', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menonaktifkan pengumuman ini?')">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-sm btn-warning mb-1">Nonaktif</button>
                            </form>

                            {{-- Tombol Hapus --}}
                            <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pengumuman ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada pengumuman yang ditambahkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
