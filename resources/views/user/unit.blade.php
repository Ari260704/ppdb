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
    <link rel="stylesheet" href="{{ asset('css/css_user/visi.css') }}">

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

    <section class="py-5" style="background-color: #f3f3f3;">
        <div class="container">
            <h2 class="text-center fw-bold text-success">Guru dan Tenaga Kependidikan</h2>
            <p class="text-center text-muted">Foto Guru dan Tenaga Kependidikan MTs Darul Hikmah</p>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}" class="card-img-top img-fluid"
                                alt="Guru 1">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Amelia Sussena H., M.Pd</h5>
                                <p class="card-text">Guru Ilmu Pengetahuan Alam</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}" class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}" class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}"class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}" class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}"class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 7 -->
                    <div class="swiper-slide text-center">
                        <div class="card border-0 shadow-sm p-3">
                            <img src="{{ asset('images/profile.jpg') }}" class="card-img-top img-fluid"
                                alt="Guru 2">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold">Supardi, S.Ag, M.Pd</h5>
                                <p class="card-text">Guru Bahasa Arab & Tahfidz</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tambahkan slide lainnya dengan format sama -->

                </div>

                <!-- Navigasi -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination mt-3"></div>
            </div>
        </div>
    </section>

    {{-- footer  --}}
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
    document.addEventListener("DOMContentLoaded", function() {
        const fadeInEl = document.querySelector('.fade-in');
        if (!fadeInEl) return;

        function checkFade() {
            const rect = fadeInEl.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                fadeInEl.classList.add('show');
            }
        }

        window.addEventListener('scroll', checkFade);
        checkFade();
    });

     const swiper = new Swiper(".mySwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            }
        }
    });
    // section guru
</script>

</html>
