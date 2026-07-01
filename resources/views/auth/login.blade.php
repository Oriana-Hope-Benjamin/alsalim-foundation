<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Alsalim Foundation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .bg-navy {
            background-color: #435ebe;
        }

        .text-warning {
            color: #ffc107 !important;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            font-weight: 600;
        }

        .form-control:focus {
            border-color: #ffc107;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 login-card flex-row">

                    <div class="col-md-5 bg-navy text-white d-none d-md-flex flex-column justify-content-center align-items-center p-5 text-center">
                        <div class="rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center mb-4 shadow" style="width: 80px; height: 80px; font-size: 2rem; font-weight: bold;">
                            AF
                        </div>
                        <h3 class="fw-bold mb-2">Alsalim Foundation</h3>
                        <p class="text-white-50">Secure Administration Portal</p>
                    </div>

                    <div class="col-md-7 p-5 bg-white">
                        <h4 class="fw-bold mb-1">Welcome Back</h4>
                        <p class="text-muted small mb-4">Please sign in to your admin account.</p>

                        @if (session('status'))
                        <div class="alert alert-success mb-4 rounded-3 text-sm">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold small text-secondary">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="password" class="form-label fw-bold small text-secondary mb-0">Password</label>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="small text-decoration-none text-primary">Forgot password?</a>
                                    @endif
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label small text-muted" for="remember_me">Keep me logged in</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning text-dark py-2 rounded-3 shadow-sm">
                                    Sign In <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>