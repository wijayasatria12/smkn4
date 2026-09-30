<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - SMKN 4 Bogor</title>

     <link rel="shortcut icon" href="{{ asset('assets/images/logo ss.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #111827; font-family: 'Lexend Deca', sans-serif;">
    <section class="min-vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4" style="background-color: #1f2937; color: white;">
                        <div class="card-body p-4 p-md-5">
                            {{-- Logo --}}
                            <div class="text-center mb-4">
                                <img
                                    src="{{ asset('assets/images/logo.png') }}"
                                    alt="Logo satset"
                                    width="75"
                                    height="75"
                                    class="object-fit-contain mb-3">
                            </div>

                            {{-- Judul --}}
                            <div class="text-center mb-4">
                                <h2 class="h4 fw-semibold mb-2 text-white">Login Admin</h2>
                                <p class="text-secondary small mb-0">Masuk untuk mengelola website sekolah</p>
                            </div>

                            {{-- Error Login --}}
                            @if(session()->has('loginError'))
                                <div class="alert alert-danger small" role="alert">{{ session('loginError') }}</div>
                            @endif

                            {{-- Form --}}
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                {{-- Email --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold text-white">Email</label>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Masukkan email"
                                        value="{{ old('email') }}"
                                        class="form-control"
                                        required>
                                </div>

                    {{-- Password --}}
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold text-white">Kata Sandi</label>

                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        placeholder="Masukkan kata sandi"
                                        class="form-control"
                                        required>
                                </div>

                    {{-- Button --}}
                        <button type="submit" class="btn w-100 text-white"
                                 style="background-color: #198754;">Masuk</button>
                            </form>

                            {{-- Divider --}}
                            <div class="d-flex align-items-center my-4">
                                <hr class="flex-grow-1">
                                <span class="px-3 text-secondary small">Atau</span>
                                <hr class="flex-grow-1">
                            </div>

                            {{-- Kembali --}}
                            <div class="text-center">
                               <a href="/" style="color: #198754; text-decoration: none;">← Kembali ke website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>