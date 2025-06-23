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
    <link rel="stylesheet" href="{{ asset('css/css_user/panduan.css') }}">

    <title>MTs Darul Hikmah</title>
</head>
<body>
    {{-- @dd($pengumuman->status) --}}
     <!-- Modal -->
     @if($pengumuman->status == 'Aktif')
    <div class="modal fade" id="pengumumanModal" tabindex="-1" aria-labelledby="pengumumanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                   <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" alt="Logo MTs Darul Hikmah" height="60">
                    <h3 class="modal-title text-success fw-bold mx-auto" id="pengumumanModalLabel">PENGUMUMAN</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p>{{ $pengumuman->isi }}</p>

                    <ul class="list-unstyled">
                        <li>📧 Email: ppdb@mtsdarulhikmah.sch.id</li>
                        <li>📞 WA: 08xx-xxxx-xxxx (Panitia PPDB)</li>
                        <li>📍 Alamat:  Jl. H. Terin No.15A, Pangkalan Jati Baru, Kec. Cinere, Kota Depok, Jawa Barat 16514</li>
                    </ul>

                    <hr>

                    <div class="d-flex justify-content-around text-center">
                        <div>
                            <div>🐦 @mts_darulhikmah</div>
                            <div>📷 @mts_darulhikmah</div>
                        </div>
                        <div>
                            <div>📺 mts_darulhikmah.official</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endif
    <!-- navbar -->
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
                    <li class="nav-item"><a class="nav-link" href="/panduan">PPDB</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
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

    {{-- Section Panduan --}}
    <div class="container my-5">
        <h4 class="fw-bold">Panduan Tahapan Pendaftaran PPDB 2025</h4>

        <!-- Step 1 -->
        <div class="step-card mb-3">
            <div class="step-number">01</div>
            <div class="step-content">
                <h6 class="fw-bold mb-1">Calon Peserta Didik</h6>
                <p class="mb-1">Mengisi formulir secara daring</p>
                <a href="#" class="text-primary text-decoration-none">Mengajukan Akun</a>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="step-card mb-3">
            <div class="step-number">02</div>
            <div class="step-content">
                <h6 class="fw-bold mb-1">Calon Peserta Didik</h6>
                <p class="mb-1">Sesuai dengan persyaratan</p>
                <a href="#" class="text-primary text-decoration-none">Unggah Berkas</a>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="step-card mb-3">
            <div class="step-number">03</div>
            <div class="step-content">
                <h6 class="fw-bold mb-1">Admin PPDB</h6>
                <p>Secara daring memverifikasi data calon peserta didik</p>
            </div>
        </div>
    </div>

    {{-- End Section Panduan --}}

    <!-- Footer -->
    <footer class="footer text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
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

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3 align-items-start">

                    <!-- MAP -->
                    <div class="col-md-4 mb-4">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4940648210404!2d106.7959297744115!3d-6.329971261935981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee6899bcf2e1%3A0x2406de7c93d1ac78!2sJUNIOR%20HIGH%20SCHOOL!5e0!3m2!1sen!2sid!4v1746256470293!5m2!1sen!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>

                    <!-- LOGO & ALAMAT -->
                    <div class="col-md-4 mb-4 text-center">
                        <h6 class="text-uppercase fw-bold mb-3 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" alt="logo"
                                class="footer-logo me-2">
                            MTs Darul Hikmah
                        </h6>
                        <p>
                            Jl. H. Terin No.15A, Pangkalan Jati Baru, Kec. Cinere, Kota Depok, Jawa Barat 16514
                        </p>
                    </div>

                    <!-- KONTAK -->
                    <div class="col-md-4 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                        <p><i class="fas fa-home me-3"></i> Depok, Jawa Barat, ID</p>
                        <p><i class="fas fa-envelope me-3"></i> <a
                                href="mailto:info@mtsdarulhikmah.sch.id">info@mtsdarulhikmah.sch.id</a></p>
                        <p><i class="fas fa-phone me-3"></i> +62 812 3456 7890</p>
                        <p><i class="fas fa-print me-3"></i> +62 812 3456 7891</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2025 <strong>MTs Darul Hikmah</strong>. All rights reserved.
        </div>
    </footer>
    <!-- Footer -->
</body>
<script>
 window.onload = function() {
            var pengumumanModal = new bootstrap.Modal(document.getElementById('pengumumanModal'));
            pengumumanModal.show();
        };
</script>
</html>
