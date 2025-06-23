<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/css_user/style.css') }}">
    <title>PPDB MTs Darul Hikmah</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" alt="Logo MTs Darul Hikmah">
                <div class="brand-text">
                    <div>MTs Darul Hikmah</div>
                    <div>Al-AZHARIYAH</div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

                    <!-- Dropdown Profil Kami -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="/profil">Profil Sekolah</a></li>
                            <li><a class="dropdown-item" href="/sejarah">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/fasilitas">Fasilitas Sekolah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="/unit-kerja">Unit Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('panduan.user') }}">PPDB</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
    <!-- Header -->
    <div class="container">
        <div class="card shadow text-center text-dark bg-gradient-card"
            style="background: linear-gradient(to bottom,  #f3f3f3 , #b7e6cb) !important;">
            <div class="card-body py-4">
                <h2 class="fw-bold text-uppercase text-success mb-4">Penerimaan Peserta Didik Baru 2025/2026</h2>

                <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" class="mb-3" style="width: 80px;">
                <h5 class="mb-1"><strong>Mts Darul Hikmah Al-Azhariyah</strong></h5>
                <p class="mb-0"><strong>Tahun Ajaran 2025 / 2026</strong></p>
                <p class="mb-1"><strong>Madrasah Tsanawiyah (MTs)</strong></p>
                <p class="fw-bold">Jalur Reguler</p>

                <p class="mb-1 mt-4">Jl. H. Terin No 31 Rt 06/03, Pangkalanjati Baru, Cinere - Depok</p>
                <p>📞 021xxxxxxx | ✉️ mtsdarulhikmah@gmail.com</p>
            </div>
        </div>
    </div>

    {{-- end header --}}

    <!-- Shortcut Menu PPDB -->
    <div class="container my-4 menu-ppdb">
        <div class="row g-3 justify-content-center">

            <!-- PANDUAN -->
            <div class="col-md-2 col-sm-6 col-6">
                <div class="card-ppdb d-flex align-items-center">
                    <div class="icon-section" style="color: rgb(39, 192, 166)">
                        <i class="fas fa-bullhorn fa-lg"></i>
                    </div>
                    <div class="text-section">
                        <div class="title">PANDUAN PPDB</div>
                        <a href="/panduan" class="link">Klik Disini</a>
                    </div>
                </div>
            </div>

            <!-- DAFTAR -->
            <div class="col-md-2 col-sm-6 col-6">
                <div class="card-ppdb d-flex align-items-center">
                    <div class="icon-section" style="color: rgb(39, 192, 166)">
                        <i class="fas fa-user-plus fa-lg"></i>
                    </div>
                    <div class="text-section">
                        <div class="title">DAFTAR PPDB</div>
                        <a href="/daftar" class="link">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- BUKTI PENDAFTARAN -->
            <div class="col-md-2 col-sm-6 col-6">
                <div class="card-ppdb d-flex align-items-center">
                    <div class="icon-section" style="color: rgb(39, 192, 166)">
                        <i class="fas fa-id-badge fa-lg"></i>
                    </div>
                    <div class="text-section">
                        <div class="title">CEK PENDAFTARAN</div>
                        <a href="/cek" class="link">Klik Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Shortcut Menu PPDB -->

    <!-- Main Content -->
    <div class="container">
        <div class="card-custom">
            <h4 class="text-center fw-bold mb-4">SELAMAT DATANG CALON SISWA/I MTs DARUL HIKMAH AL-AZHARIYAH</h4>
            <p>
                Di halaman resmi Penerimaan Peserta Didik Baru (PPDB) MTs Darul Hikmah Al-Azhariyah Tahun Pelajaran
                2025/2026. PPDB MTs Darul Hikmah Al-Azhariyah menggunakan sistem Online yang bisa diakses dimana saja.
            </p>
            <p><strong>Petunjuk:</strong></p>
            <ul>
                <li>Langkah 1: Siswa mengisi form pendaftaran dengan identitas yang valid</li>
                <li>Langkah 2: Mencetak kartu tes seleksi</li>
                <li>Langkah 3: Mengikuti tes seleksi (akademik dan BTQ)</li>
                <li>Langkah 4: Melihat dan mencetak hasil pengumuman</li>
            </ul>
        </div>

        <!-- Formulir -->
        <div class="form-container" id="form-ppdb">
            <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- DATA SISWA -->
                <div class="mb-3">
                    <h5 class="mb-0 text-center">
                        <div class="card card-body">
                            Data Calon Siswa
                        </div>
                    </h5>
                </div>
                <div class="card card-body mb-4">
                    <div class="row g-3">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama_lengkap"
                                    placeholder="Nama Lengkap" required>
                                <label for="nama_lengkap">Nama Lengkap</label>
                                @error('nama_lengkap')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="col-md-6">
                            <label class="form-label d-block">Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki"
                                    value="Laki-Laki" required>
                                <label class="form-check-label" for="laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                    value="Perempuan" required>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>

                        <!-- NISN -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nisn" placeholder="NISN"
                                    required>
                                <label for="nisn">NISN</label>
                            </div>
                        </div>

                        <!-- NIK -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nik" placeholder="NIK"
                                    required>
                                <label for="nik">NIK</label>
                            </div>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="tmpt_lahir"
                                    placeholder="Tempat Lahir" required>
                                <label for="tmpt_lahir">Tempat Lahir</label>
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    placeholder="Tanggal Lahir" required>
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                        </div>

                        <!-- Nomor Akta -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="no_akta"
                                    placeholder="Nomor Akta Kelahiran" required>
                                <label for="no_akta">Nomor Akta Kelahiran</label>
                            </div>
                        </div>

                        <!-- Agama -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="agama" id="agama" required>
                                    <option selected disabled value="">Pilih Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="khonghucu">Khonghucu</option>
                                </select>
                                <label for="agama">Agama</label>
                            </div>
                        </div>

                        <!-- Disabilitas -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="disabilitas" id="disabilitas" required>
                                    <option selected disabled value="">Pilih Kebutuhan Khusus</option>
                                    <option value="tidak">Tidak</option>
                                    <option value="netra">Netra</option>
                                    <option value="wicara">Wicara</option>
                                    <option value="rungu">Rungu</option>
                                </select>
                                <label for="disabilitas">Kebutuhan Khusus</label>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                    required>
                                <label for="alamat">Alamat</label>
                            </div>
                        </div>

                        <!-- RT dan RW -->
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rt" placeholder="RT" required>
                                <label for="rt">RT</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rw" placeholder="RW" required>
                                <label for="rw">RW</label>
                            </div>
                        </div>

                        <!-- Kelurahan dan Kecamatan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan"
                                    required>
                                <label for="kelurahan">Kelurahan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan"
                                    required>
                                <label for="kecamatan">Kecamatan</label>
                            </div>
                        </div>

                        <!-- Tinggal dan Transportasi -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="tinggal" id="tinggal" required>
                                    <option selected disabled value="">Pilih Tinggal Bersama</option>
                                    <option value="orang tua">Orang Tua</option>
                                    <option value="wali">Wali</option>
                                    <option value="kos">Kos</option>
                                    <option value="asrama">Asrama</option>
                                    <option value="panti asuhan">Panti Asuhan</option>
                                </select>
                                <label for="tinggal">Tinggal Bersama</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="transportasi" id="transportasi" required>
                                    <option selected disabled value="">Pilih Transportasi</option>
                                    <option value="jalan kaki">Jalan Kaki</option>
                                    <option value="kendaraan pribadi">Kendaraan Pribadi</option>
                                    <option value="kereta api">Kereta Api</option>
                                    <option value="kendaraan umum">Kendaraan Umum</option>
                                    <option value="ojek">Ojek</option>
                                </select>
                                <label for="transportasi">Transportasi</label>
                            </div>
                        </div>

                        <!-- Anak Keberapa -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="anak_ke"
                                    placeholder="Anak Keberapa" required>
                                <label for="anak_ke">Anak Keberapa</label>
                            </div>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="no_telp"
                                    placeholder="Nomor Telepon" required>
                                <label for="nomor_telepon">Nomor Telepon Aktif</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <!-- FOTO SISWA -->
                        <div class="col-md-6">
                            <label for="foto_siswa">Upload Foto Calon Siswa</label>
                            <input type="file" class="form-control" name="foto_siswa" placeholder="Foto Siswa"
                                required>
                        </div>
                    </div>
                </div>
                <!-- END DATA SISWA -->

                <!-- DATA AYAH -->
                <div class="mb-3">
                    <h5 class="mb-0 text-center">
                        <div class="card card-body">
                            Data Ayah
                        </div>
                    </h5>
                </div>
                <div class="card card-body mb-4">
                    <div class="row g-3">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama_lengkap_ayah"
                                    placeholder="Nama Lengkap Ayah" required>
                                <label for="nama_lengkap_ayah">Nama Lengkap Ayah</label>
                            </div>
                        </div>

                        <!-- NIK -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="nik_ayah" placeholder="NIK Ayah"
                                    required>
                                <label for="nik_ayah">NIK</label>
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="tgl_lahir_ayah"
                                    placeholder="Tanggal Lahir Ayah" required>
                                <label for="tgl_lahir_ayah">Tanggal Lahir</label>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="alamat_ayah"
                                    placeholder="Alamat Ayah" required>
                                <label for="alamat_ayah">Alamat</label>
                            </div>
                        </div>

                        <!-- RT dan RW -->
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rt_ayah" placeholder="RT Ayah"
                                    required>
                                <label for="rt_ayah">RT</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rw_ayah" placeholder="RW Ayah"
                                    required>
                                <label for="rw_ayah">RW</label>
                            </div>
                        </div>

                        <!-- Kelurahan dan Kecamatan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kelurahan_ayah"
                                    placeholder="Kelurahan Ayah" required>
                                <label for="kelurahan_ayah">Kelurahan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kecamatan_ayah"
                                    placeholder="Kecamatan Ayah" required>
                                <label for="kecamatan_ayah">Kecamatan</label>
                            </div>
                        </div>

                        <!-- Pendidikan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="pendidikan_ayah" id="pendidikan_ayah" required>
                                    <option selected disabled value="">Pendidikan</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA/SMK</option>
                                    <option value="d1">D1</option>
                                    <option value="d3">D3</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                </select>
                                <label for="pendidikan_ayah">Pendidikan</label>
                            </div>
                        </div>

                        <!-- Pekerjaan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                                    <option selected disabled value="">Pilih Pekerjaan Ayah</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="petani">Petani</option>
                                    <option value="peternak">Peternak</option>
                                    <option value="pns/tni/polri">PNS/TNI/POLRI</option>
                                    <option value="karyawan">Karyawan Swasta</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                </select>
                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            </div>
                        </div>

                        <!-- Penghasilan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="penghasilan_ayah" id="penghasilan_ayah" required>
                                    <option selected disabled value="">Penghasilan Bulanan</option>
                                    <option value="Kurang Dari 500.000">Kurang Dari 500.000</option>
                                    <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                    <option value="1.000.000 - 3.000.000">1.000.000 - 3.000.000</option>
                                    <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                    <option value="Lebih Dari 5.000.000">Lebih dari 5.000.000</option>
                                </select>
                                <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DATA AYAH -->

                <!-- DATA IBU -->
                <div class="mb-3">
                    <h5 class="mb-0 text-center">
                        <div class="card card-body">
                            Data Ibu
                        </div>
                    </h5>
                </div>
                <div class="card card-body mb-4">
                    <div class="row g-3">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama_lengkap_ibu"
                                    placeholder="Nama Lengkap Ibu" required>
                                <label for="nama_lengkap_ibu">Nama Lengkap Ibu</label>
                            </div>
                        </div>

                        <!-- NIK -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="nik_ibu" placeholder="NIK Ibu"
                                    required>
                                <label for="nik_ibu">NIK</label>
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="tgl_lahir_ibu"
                                    placeholder="Tanggal Lahir Ibu" required>
                                <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="alamat_ibu"
                                    placeholder="Alamat Ibu" required>
                                <label for="alamat_ibu">Alamat</label>
                            </div>
                        </div>

                        <!-- RT dan RW -->
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rt_ibu" placeholder="RT Ibu"
                                    required>
                                <label for="rt_ibu">RT</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="rw_ibu" placeholder="RW Ibu"
                                    required>
                                <label for="rw_ibu">RW</label>
                            </div>
                        </div>

                        <!-- Kelurahan dan Kecamatan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kelurahan_ibu"
                                    placeholder="Kelurahan Ibu" required>
                                <label for="kelurahan_ibu">Kelurahan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kecamatan_ibu"
                                    placeholder="Kecamatan Ibu" required>
                                <label for="kecamatan_ibu">Kecamatan</label>
                            </div>
                        </div>

                        <!-- Pendidikan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="pendidikan_ibu" id="pendidikan_ibu" required>
                                    <option selected disabled value="">Pendidikan</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA/SMK</option>
                                    <option value="d1">D1</option>
                                    <option value="d3">D3</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                </select>
                                <label for="pendidikan_ibu">Pendidikan</label>
                            </div>
                        </div>

                        <!-- Pekerjaan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                                    <option selected disabled value="">Pilih Pekerjaan Ibu</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="ibu rumah tangga">Ibu Rumah Tangga</option>
                                    <option value="petani">Petani</option>
                                    <option value="peternak">Peternak</option>
                                    <option value="pns/tni/polri">PNS/TNI/POLRI</option>
                                    <option value="karyawan">Karyawan Swasta</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                </select>
                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            </div>
                        </div>

                        <!-- Penghasilan -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="penghasilan_ibu" id="penghasilan_ibu" required>
                                    <option selected disabled value="">Penghasilan Bulanan</option>
                                    <option value="Kurang Dari 500.000">Kurang Dari 500.000</option>
                                    <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                    <option value="1.000.000 - 3.000.000">1.000.000 - 3.000.000</option>
                                    <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                    <option value="Lebih Dari 5.000.000">Lebih dari 5.000.000</option>
                                </select>
                                <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DATA IBU -->

                <!-- Tombol Submit -->
                <div class="col-12 mb-4">
                    <button class="btn btn-success w-100 py-3" type="submit">Submit Pendaftaran</button>
                </div>
            </form>
        </div>
        <!-- end formulir  -->

        <footer class="footer text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Media Sosial -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Connect with us on social media:</span>
                </div>
                <div>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-google"></i></a>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="me-4 text-reset"><i class="fab fa-github"></i></a>
                </div>
            </section>

            <!-- Isi Footer -->
            <section>
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3 align-items-center">

                        <!-- Kiri: Maps -->
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4940648210404!2d106.7959297744115!3d-6.329971261935981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee6899bcf2e1%3A0x2406de7c93d1ac78!2sJUNIOR%20HIGH%20SCHOOL!5e0!3m2!1sen!2sid!4v1746256470293!5m2!1sen!2sid"
                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>

                        <!-- Tengah: Logo & Alamat -->
                        <div class="col-md-4 mb-4 mb-md-0 text-center">
                            <h6 class="text-uppercase fw-bold mb-3 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" alt="logo"
                                    class="footer-logo me-2">
                                MTs Darul Hikmah
                            </h6>
                            <p>
                                Jl. H. Terin No.15A, Pangkalan Jati Baru, Kec. Cinere, Kota Depok, Jawa Barat 16514
                            </p>
                        </div>

                        <!-- Kanan: Kontak -->
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                            <p><i class="fas fa-home me-3"></i> Depok, Jawa Barat, ID</p>
                            <p><i class="fas fa-envelope me-3"></i> info@mtsdarulhikmah.sch.id</p>
                            <p><i class="fas fa-phone me-3"></i> +62 812 3456 7890</p>
                            <p><i class="fas fa-print me-3"></i> +62 812 3456 7891</p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2025 MTs Darul Hikmah. All rights reserved.
            </div>
        </footer>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#198754'
        });
    </script>
@endif

</html>
