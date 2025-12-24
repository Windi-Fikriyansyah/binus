<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #157fb1;
            font-family: "Arial", sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            padding: 20px 0;
        }

        .site-title {
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: bold;
        }

        .binus {
            color: white;
        }

        .maya {
            color: #FFA500;
        }

        .login-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            margin: 20px;
        }

        .login-card h2 {
            color: #333333;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #444444;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #157fb1;
            box-shadow: 0 0 0 0.2rem rgba(30, 144, 255, 0.25);
            background-color: #fff;
        }

        select.form-control {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M8 12l-6-6h12l-6 6z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 35px;
        }

        .btn-primary {
            background-color: #157fb1;
            border: none;
            padding: 12px 15px;
            font-size: 16px;
            border-radius: 30px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-primary:hover {
            background-color: #187bcd;
        }

        .register-link {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: 15px;
        }

        .register-link a {
            color: #157fb1;
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
            padding: 10px;
        }

        ::placeholder {
            color: #aab0b6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="site-title">
            <span class="binus">BINUS</span><span class="maya">MAYA</span>
        </h1>
        <div class="login-card">
            <h2>Register</h2>
            @if ($errors->has('login'))
            <div class="alert alert-danger">
                {{ $errors->first('login') }}
            </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('simpan_register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan nama pengguna" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan email pengguna" required>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="role" value="student" required>

                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <div class="register-link">
                    Already have an account?<a href="{{ url('/') }}"> Login here</a>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>© 2025 BinusMaya</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
