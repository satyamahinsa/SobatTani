<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register | SobatTani</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="row border rounded-5 p-3 bg-white shadow box-area">
          <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #218838;">
              <div class="featured-image mb-3">
                  <img src="{{ asset('img/auth/logo-register.png') }}" class="img-fluid" style="width: 300px;">
              </div>
              <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Berbagi Pengetahuan, Merangsang Pertumbuhan</small>
          </div> 
          <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Register</h2>
                        <p>Daftarkan diri dan dapatkan akses menuju dashboard.</p>
                    </div>
              </div>
              <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap anda" value="{{ old('name') }}" required autofocus autocomplete="name">
                </div>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Masukkan email anda" value="{{ old('email') }}" required autocomplete="username">
                </div>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required autocomplete="new-password">
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group mb-3">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan konfirmasi password" required autocomplete="new-password">
                  <div class="input-group-append">
                  </div>
                </div>
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                
                <div class="row">
                  <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" style="background-color: #218838; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#28a745'" onmouseout="this.style.backgroundColor='#218838'" type="submit" >Daftar</button>
                  </div>
                </div>
              </form>
              
              <div class="row">
                  <small>Sudah punya akun? <a href="{{ route('login') }}">Log in</a></small>
              </div>
              
          </div>
      </div> 
    </div>
</body>
</html>
