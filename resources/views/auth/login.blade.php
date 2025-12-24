<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Modul 3</title>
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
            height: 100%;
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
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-card h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #555555;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #cccccc;
            border-radius: 8px;
            background-color: #fafafa;
        }

        .form-group input:focus {
            border-color: #157fb1;
            outline: none;
        }

        .btn-login {
            background-color: #157fb1;
            color: white;
            border: none;
            padding: 12px 15px;
            font-size: 16px;
            border-radius: 30px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .register-link {
            margin-top: 15px;
        }

        .register-link a {
            color: #157fb1;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="site-title">
            <span class="binus">BINUS</span><span class="maya">MAYA</span>
        </h1>
        <div class="login-card">
            <h2>Login</h2>
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
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="register-link">
                    Don't have an account?<a href="{{ url('/register') }}"> Register here</a>
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
