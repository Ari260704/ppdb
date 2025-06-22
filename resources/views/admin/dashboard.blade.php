@extends('admin.layout')
@section('content')
    <!-- Main Content -->
    <div class="main-content mt-4">
        <h3 class="mb-4">Dashboard</h3>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dashboard-box text-center border-start border-success border-5">
                    <h5>Total Pendaftar</h5>
                    <h2>{{ $totalPendaftar }}</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box text-center border-start border-warning border-5">
                    <h5>Sudah Diverifikasi</h5>
                    <h2>{{ $sudahDiverifikasi }}</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box text-center border-start border-danger border-5">
                    <h5>Belum Diverifikasi</h5>
                    <h2>{{ $belumDiverifikasi }}</h2>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h5>Aktivitas Terbaru</h5>
            <table class="table table-bordered mt-3">
                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aktivitasTerbaru as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama}}</td> <!-- Sesuaikan dengan kolom di database -->
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @if ($item->status_siswa == 'terima')
                                    <span class="badge bg-success"> Di Terima</span>
                                @elseif($item->status_siswa == 'tidak terima')
                                    <span class="badge bg-danger">Tidak Di Terima</span>
                                @elseif($item->status_siswa == 'Belum DiVerifikasi')
                                    <span class="badge bg-warning">Belum DiVerifikasi</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
