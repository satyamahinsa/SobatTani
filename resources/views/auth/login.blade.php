<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <title>Login | SobatTani</title>
    <style>
        .btn-login {
            background-color: #218838;
            transition: background-color 0.3s;
        }
        .btn-login:hover {
            background-color: #28a745;
        }
        .box-area {
            max-width: 800px;
            padding: 20px;
        }
        .left-box {
            padding: 15px;
            text-align: center;
        }
        .right-box {
            padding: 15px;
        }
        .featured-image img {
            width: 300px;
        }
        .header-text h2 {
            font-size: 24px;
        }
        .header-text p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #218838;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Login Image">
                </div>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Berbagi Pengetahuan, Merangsang Pertumbuhan</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Halo, SobatTani</h2>
                        <p>Mari menjadi bagian dari perubahan pertanian.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                            @error('email')
                                <div class="w-100 mt-2 text-danger">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                            @error('password')
                                <div class="w-100 mt-2 text-danger">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{ route('password.request') }}" class="text-sm">{{ __('Forgot Password?') }}</a>
                        </div>

                        <button class="btn btn-lg btn-primary w-100 fs-6 btn-login" type="submit">
                            {{ __('Log in') }}
                        </button>
                    </form>
                    <div class="row mt-3">
                        <small>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Display success or error messages -->
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ $message }}'
            });
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ $message }}'
            });
        </script>
    @endif
</body>
</html>
