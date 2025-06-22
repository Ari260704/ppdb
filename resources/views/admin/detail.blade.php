@extends('admin.layout')
@section('content')
    <style>
        .profile-container {
            max-width: 100%;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-title {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-menu {
            display: flex;
            gap: 20px;
        }

        .profile-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .profile-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .profile-content {
            padding: 30px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: 500;
            color: #555;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .info-value {
            font-weight: 600;
            color: #333;
            font-size: 16px;
        }

        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .profile-menu {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
    <div class="profile-container">


        <div class="profile-content">
            <div class="section-title">DETAIL DATA CALON SISWA</div>

            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">NISN</div>
                    <div class="info-value">{{ $detail->nisn }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Nama</div>
                    <div class="info-value">{{ $detail->nama }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">NIK</div>
                    <div class="info-value">{{ $detail->nik }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Tanggal Lahir</div>
                    <div class="info-value">{{ $detail->tgl_lahir }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Tempat Lahir</div>
                    <div class="info-value">{{ $detail->tmpt_lahir }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Jenis Kelamin</div>
                    <div class="info-value">{{ $detail->jkelamin }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Nomor Akta</div>
                    <div class="info-value">{{ $detail->no_akta }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Agama</div>
                    <div class="info-value">{{ $detail->agama }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Alamat</div>
                    <div class="info-value">{{ $detail->alamat }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Rt</div>
                    <div class="info-value">{{ $detail->rt }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Rw</div>
                    <div class="info-value">{{ $detail->rw }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Kelurahan</div>
                    <div class="info-value">{{ $detail->kelurahan }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Kecamatan</div>
                    <div class="info-value">{{ $detail->kecamatan }}</div>
                </div>


                <div class="info-item">
                    <div class="info-label">Nomor Telepon</div>
                    <div class="info-value">{{ $detail->no_telp }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-value">{{ $detail->email }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Foto Siswa</div>
                    <img src="{{ asset('storage/' . $detail->foto_siswa) }}" class="img-fluid rounded mb-3"
                        alt="Foto Profil" style="max-height: 150px;">
                </div>
                <form action="{{ route('admin.pendaftar.status') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $detail->id}}">
                    <div class="info-item">
                        <div class="info-label">Verifikasi</div>
                        <select name="status_siswa" class="form-control">
                            <option value="terima">Terima</option>
                            <option value="tidak terima">Tidak Diterima</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
                @if (session('Success'))
                    <script>
                        Swal.fire({
                            icon: 'Success',
                            title: 'Berhasil!',
                            text: '{{ session('Success') }}',
                            confirmButtonColor: '#198754'
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
@endsection
