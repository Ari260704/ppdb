@extends('admin.layout')
@push('styles')
<style>
    .dashboard-box {
        transition: 0.3s;
    }
    .dashboard-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    }
    table.table-hover tbody tr:hover {
        background-color: #11ce00;
    }

     .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@section('content')
<div class="main-content mt-4">
    <h3 class="mb-4 fw-bold">Dashboard Admin</h3>

    <!-- Info Boxes -->
 <div class="row g-4">
    <div class="col-md-4">
        <div class="dashboard-box p-4 rounded shadow-sm d-flex align-items-center bg-light border-start border-success border-5">
            <div class="icon-circle bg-success text-white me-3">
                <i class="fas fa-users fa-lg"></i>
            </div>
            <div>
                <h6 class="text-muted mb-1">Total Pendaftar</h6>
                <h2 class="text-success mb-0">{{ $totalPendaftar }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box p-4 rounded shadow-sm d-flex align-items-center bg-light border-start border-warning border-5">
            <div class="icon-circle bg-warning text-white me-3">
                <i class="fas fa-user-check fa-lg"></i>
            </div>
            <div>
                <h6 class="text-muted mb-1">Sudah Diverifikasi</h6>
                <h2 class="text-warning mb-0">{{ $sudahDiverifikasi }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box p-4 rounded shadow-sm d-flex align-items-center bg-light border-start border-danger border-5">
            <div class="icon-circle bg-danger text-white me-3">
                <i class="fas fa-user-clock fa-lg"></i>
            </div>
            <div>
                <h6 class="text-muted mb-1">Belum Diverifikasi</h6>
                <h2 class="text-danger mb-0">{{ $belumDiverifikasi }}</h2>
            </div>
        </div>
    </div>
</div>


    <!-- Aktivitas Terbaru -->
    <div class="mt-5">
        <h5 class="fw-bold mb-3">Aktivitas Terbaru</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle shadow-sm bg-white">
                <thead class="table-success text-white" style="background-color: #198754;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($aktivitasTerbaru as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @php
                                    $status = strtolower($item->status_siswa);
                                @endphp
                                @if ($status == 'terima')
                                    <span class="badge bg-success px-3 py-2">Diterima</span>
                                @elseif ($status == 'tidak terima')
                                    <span class="badge bg-danger px-3 py-2">Tidak Diterima</span>
                                @else
                                    <span class="badge bg-warning text-dark px-3 py-2">Belum Diverifikasi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada aktivitas terbaru.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
