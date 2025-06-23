<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MTs Darul Hikmah - Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/css_admin/layout.css') }}">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <div class="d-flex" style="min-height: 100vh;">

        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column justify-content-between p-3 shadow-sm"
            style="width: 250px; background: linear-gradient(#26be68) !important; border-right: 1px solid #dee2e6;">


            <!-- Logo & Judul -->
            <div class="text-center py-4 border-bottom border-white">
                <img src="{{ asset('images/logo_mts-removebg-preview.png') }}" alt="Logo MTs Darul Hikmah"
                    style="width: 70px; height: 70px; object-fit: contain;" class="mb-2 rounded">
                <h5 class="text-white fw-bold m-0" style="font-size: 16px; letter-spacing: 1px;">MTS DARUL HIKMAH</h5>
            </div>

            <!-- Menu atas -->
            <div class="mt-4">
                <a href="{{ route('admin.index') }}" class="d-block mb-3 text-white text-decoration-none">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
                <hr class="bg-white" />
                <a href="{{ route('admin.pendaftar') }}" class="d-block mb-3 text-white text-decoration-none">
                    <i class="fas fa-user-graduate me-2"></i> Data Pendaftar
                </a>
                <hr class="bg-white" />
                <a href="{{ route('admin.berita.index') }}" class="d-block mb-3 text-white text-decoration-none">
                    <i class="fas fa-id-card me-2"></i> Manajemen Berita
                </a>
                <hr class="bg-white" />
                <a href="{{ route('admin.pengumuman.index') }}" class="d-block mb-3 text-white text-decoration-none">
                    <i class="fas fa-bullhorn me-2"></i> Pengumuman
                </a>
            </div>

            <!-- Bagian bawah sidebar -->
            <div class="text-center mt-auto pt-4 border-top border-white">
                <!-- Profil Admin -->
                <div class="mb-2">
                    <i class="fas fa-user-circle" style="font-size: 3rem; color: #ffffff;"></i>
                    <div class="mt-1 text-white">
                        <small class="d-block">Admin</small>
                        <strong class="d-block">{{ Auth::user()->name }}</strong>
                    </div>
                </div>

                <!-- Tombol Logout -->
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100 text-white fw-bold">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </button>

                </form>
                <hr class="bg-white" />
            </div>
        </div>

        <!-- Konten Utama -->
        <div class="flex-grow-1 p-4" style="background-color: #f8f9fa;">
            <div class="bg-white rounded shadow-sm p-4">
                @yield('content')
            </div>
        </div>

    </div>
</body>

</html>
