<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin - PPDB MTs Darul Hikmah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #198754;
      --secondary-color: #146c43;
      --accent-color: #20c997;
      --light-bg: #f8f9fa;
    }
    
    body {
      background: linear-gradient(135deg, #f1f3f5 0%, #e9ecef 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    
    .login-container {
      width: 100%;
      padding: 20px;
    }
    
    .login-box {
      max-width: 450px;
      margin: 0 auto;
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      position: relative;
      overflow: hidden;
    }
    
    .login-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }
    
    .login-title {
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
      color: var(--primary-color);
      font-size: 1.8rem;
      position: relative;
      padding-bottom: 15px;
    }
    
    .login-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--accent-color);
      border-radius: 3px;
    }
    
    .form-label {
      font-weight: 600;
      color: #495057;
      margin-bottom: 8px;
    }
    
    .form-control {
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid #ced4da;
      transition: all 0.3s ease;
    }
    
    .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.15);
    }
    
    .btn-login {
      background-color: var(--primary-color);
      border: none;
      padding: 12px;
      font-weight: 600;
      letter-spacing: 0.5px;
      border-radius: 8px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      font-size: 0.9rem;
    }
    
    .btn-login:hover {
      background-color: var(--secondary-color);
      transform: translateY(-2px);
    }
    
    .input-group-text {
      background-color: white;
      border-right: none;
    }
    
    .input-with-icon {
      border-left: none;
      padding-left: 5px;
    }
    
    .school-logo {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      display: block;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--light-bg);
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }
    
    .footer-text {
      text-align: center;
      margin-top: 20px;
      color: #6c757d;
      font-size: 0.85rem;
    }
    
    .alert {
      border-radius: 8px;
    }
    
    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .login-box {
      animation: fadeIn 0.6s ease-out;
    }
    
    /* Responsive */
    @media (max-width: 576px) {
      .login-box {
        padding: 30px 20px;
      }
      
      .login-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <!-- School Logo - Replace with your actual logo -->
      <img src="{{ asset('images/logo_mts-removebg-preview.png')}}" alt="MTs Darul Hikmah" class="school-logo">
      
      <h4 class="login-title">Login Admin PPDB</h4>
      <p class="text-center text-muted mb-4">Masukan Email dan Password </p>

      {{-- Notifikasi error --}}
      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form method="POST" action="{{ url('/admin/login') }}">
        @csrf
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input type="email" name="email" class="form-control input-with-icon" value="{{ old('email') }}" required autofocus placeholder="Email">
          </div>
        </div>
        
        <div class="mb-4">
          <label for="password" class="form-label">Kata Sandi</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" name="password" class="form-control input-with-icon" required placeholder="Password">
          </div>
        </div>
        
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-login">
            <i class="fas fa-sign-in-alt me-2"></i> Masuk
          </button>
        </div>
        
        {{-- <div class="text-center">
          <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Lupa kata sandi?</a>
        </div> --}}
      </form>
      
      <p class="footer-text mt-4">
        &copy; {{ date('Y') }} PPDB MTs Darul Hikmah. All rights reserved.
      </p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple animation for input focus
    document.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.querySelector('.input-group-text').style.color = 'var(--primary-color)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.querySelector('.input-group-text').style.color = '';
      });
    });
  </script>
</body>
</html>