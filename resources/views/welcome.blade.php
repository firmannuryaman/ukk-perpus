<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan SMKN 1 Maja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"> WEB | SMK </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Conditionally show Login and Register links based on authentication status -->
            @guest
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: white">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="color: white">Register</a>
                    </li>
                </ul>
            @endguest

            @auth
                <!-- You can add authenticated user-specific links here if needed -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" style="color: white">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="color: white">Logout</button>
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
        </div>
    </nav>
    <div class="shadow-lg rounded-lg bg-primary">
        <div class="card-body">
            <div class="text-gray-900 fs-2 text-center text-capitalize fst-normal" style="color: white">
                {{ __('WELCOME | PERPUSTAKAAN DIGITAL !') }}
            </div>
        </div>
    </div>

    <!-- Your content here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<div class="container">
    <div class="row">
        @foreach ($buku as $b)
            <div class="col-md-3" style="margin-top: 10vh">
                <!-- Adjust the column size based on your preference -->
                <div class="card mb-3" style="flex-direction: row">
                    <img src="{{ asset('storage/' . $b->foto) }}" class="card-img-top card border-3" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $b->judul }}</h5>
                        <p class="card-text">{{ $b->deskripsi }}</p>
                        <a href="{{ route('detail', $b->id) }}" class="btn btn-primary fs-6">Detail Buku</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>
