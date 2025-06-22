@extends('admin.layout')


@section('content')
    <h3 class="mb-4">Data Pendaftar</h3>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nisn }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</td>
                            <td>
                                @if ($row->status_siswa == 'terima')
                                    <span class="badge bg-success"> DiTerima</span>
                                @elseif($row->status_siswa == 'tidak terima')
                                    <span class="badge bg-danger">Tidak Diterima</span>
                                @elseif($row->status_siswa == 'draf')
                                    <span class="badge bg-warning">Draf</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.pendaftar.detail', $row->id) }}"
                                    class="btn btn-sm btn-primary">detail</a>
                                <form action="{{ route('admin.pendaftar.delete', $row->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
