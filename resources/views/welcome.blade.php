{{-- template bootstrap --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PERPUSTAKAAN | WEB</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('asset') }}/assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="{{ asset('asset') }}/https://fonts.googleapis.com" />
    <link rel="preconnect" href="{{ asset('asset') }}/https://fonts.gstatic.com" crossorigin />
    <link
        href="{{ asset('asset') }}/https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="{{ asset('asset') }}/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('asset') }}/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <img src="{{ asset('images/logo/logosmk1.jpg') }}" alt="Logo" width="170" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                @guest
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                @endguest

                @auth
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="fs-3 fw-light text-muted">I can help your to</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline fs-1">Get Book in
                                    WEB
                                    School
                                    Library</span></h1>
                            <div
                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                    href="{{ route('dashboard') }}">Back To Home</a>
                            </div>
                        </div>
                    </div>
                    {{-- content --}}
                    <div class="row">
                        @foreach ($buku as $b)
                            <div class="col-md-3" style="margin-top: 10vh">
                                <!-- Adjust the column size based on your preference -->
                                <div class="card mb-3" style="flex-direction: row">
                                    <img src="{{ asset('storage/' . $b->foto) }}" class="card-img-top card border-3"
                                        alt="">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $b->judul }}</h5>
                                        <p class="card-text">{{ $b->deskripsi }}</p>
                                        <a href="{{ route('detail', $b->id) }}" class="btn btn-primary fs-6">Detail
                                            Buku</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </header>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Library</span>
                            </h2>
                            <p class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                                dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque
                                officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="https://whatsapp.com"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a class="text-gradient" href="https://instagram.com/_frmannr"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a class="text-gradient" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a class="text-gradient" href="https://github.com/firmannuryaman"><i
                                        class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Your Website 2024</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
