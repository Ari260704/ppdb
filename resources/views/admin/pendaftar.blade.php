@extends('admin.layout')

@push('styles')
    <style>
        tbody tr:hover {
            background-color: #f9f9f9;
            transition: background-color 0.2s ease-in-out;
        }
    </style>
@endpush

@section('content')
    <h3 class="mb-4 fw-bold">Data Pendaftar</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-white" style="background-color: #198754;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
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
                                    @php
                                        $status = strtolower($row->status_siswa);
                                    @endphp

                                    @if ($status == 'terima')
                                        <span class="badge bg-success">
                                            <i class="bi bi-check-circle me-1"></i> Diterima
                                        </span>
                                    @elseif ($status == 'tidak terima')
                                        <span class="badge bg-danger">
                                            <i class="bi bi-x-circle me-1"></i> Tidak Diterima
                                        </span>
                                    @elseif ($status == 'draf')
                                        <span class="badge bg-warning text-dark">
                                            <i class="bi bi-pencil-fill me-1"></i> Draf
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">Tidak diketahui</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.pendaftar.detail', $row->id) }}"
                                        class="btn btn-sm btn-primary me-1">
                                        <i class="bi bi-eye-fill me-1"></i> Detail
                                    </a>
                                    <form action="{{ route('admin.pendaftar.delete', $row->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash-fill me-1"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if ($data->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data pendaftar.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
