@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Manajemen Pengumuman</h2>

        <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-success mb-3">+ Tambah Berita</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Teks Pengumuman</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @forelse($pengumuman as $index => $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ route('admin.status_pengumuman.update', $item->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin mengktifkan pengumuman ini?')">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $item->id }}">
                                    <button class="btn btn-primary btn-sm">aktif</button>
                                </form>
                                <form action="{{ route('admin.status_pengumuman.disable', $item->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin mengktifkan pengumuman ini?')">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $item->id }}">
                                    <button class="btn btn-warning btn-sm mb-1">non-aktif</a>
                                </form>
                                <form action="{{ route('admin.pengumuman.destroy', $item) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
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
    </div>
@endsection
