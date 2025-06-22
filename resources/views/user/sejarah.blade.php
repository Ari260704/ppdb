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
    <link rel="stylesheet" href="{{ asset('css/css_user/sejarah.css') }}">

    <title>MTs Darul Hikmah</title>
</head>

<body>
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

    {{-- sejarah --}}
    <section class="sejarah-section py-5 fade-in">
        <div class="container">
            <div class="row align-items-center">

                <!-- Ilustrasi Gambar -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('images/gambar 1.jpg') }}" alt="Ilustrasi Sejarah Sekolah"
                        class="img-fluid rounded shadow">
                </div>

                <!-- Konten Teks -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4 text-primary">Sejarah Sekolah</h2>

                    <div class="sejarah mb-4">
                        <h4 class="fw-semibold text-dark mb-2">Sejarah Pendiriannya</h4>
                        <p class="lead text-justify">
                            Sekolah ini didirikan pada tahun <strong>[Tahun Berdiri]</strong>, dengan tujuan untuk
                            menyediakan pendidikan berkualitas bagi masyarakat sekitar.
                            Pada awalnya, sekolah ini hanya memiliki beberapa ruang kelas dan sedikit murid. Namun,
                            seiring berjalannya waktu, sekolah ini berkembang pesat
                            dan menjadi salah satu institusi pendidikan terkemuka di wilayah ini.
                        </p>
                    </div>

                    <div class="sejarah mb-4">
                        <h4 class="fw-semibold text-dark mb-2">Pencapaian & Perkembangan</h4>
                        <p class="lead text-justify">
                            Sejarah panjang sekolah ini mencakup berbagai pencapaian dan tantangan. Pada tahun
                            <strong>[Tahun Penting]</strong>, sekolah ini berhasil mencapai
                            <em>[Pencapaian Besar]</em>, yang menjadikannya sebagai pelopor dalam bidang <em>[Bidang
                                Terkait]</em>. Sejak saat itu, sekolah ini terus berusaha untuk
                            meningkatkan kualitas pendidikan dan fasilitas yang ada demi menciptakan generasi yang lebih
                            baik.
                        </p>
                    </div>

                    <div class="sejarah">
                        <h4 class="fw-semibold text-dark mb-2">Visi ke Depan</h4>
                        <p class="lead text-justify">
                            Saat ini, sekolah ini memiliki lebih dari <strong>[Jumlah Murid]</strong> siswa dan berbagai
                            fasilitas modern yang mendukung proses belajar mengajar.
                            Dengan semangat untuk terus berkembang, sekolah ini tetap berkomitmen untuk mencetak
                            generasi yang cerdas, kreatif, dan berbudi pekerti luhur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end sejarah --}}


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
    // Menambahkan efek fade-in ketika halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll('.fade-in');

        sections.forEach(section => {
            section.classList.add('fade-in'); // Menambahkan kelas fade-in ke section
        });
    });
</script>

</html>
