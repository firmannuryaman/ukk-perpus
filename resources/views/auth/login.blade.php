{{-- LOGIN DESAIN --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PERPUSTAKAAN | WEB | LOGIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End bootstrap css -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />

</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <auth-session-status class="mb-4" :status="session('status')" />
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="{{ asset('images/logo.svg') }}" alt="logo" />
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                <form class="pt-3">
                                    <div class="form-group">
                                        <label class="visually-hidden" for="email"
                                            :value="__('email')">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control" id="email" name="email"
                                                :value="old('email')" placeholder="Masukkan email" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="visually-hidden" for="password"
                                            :value="__('password')">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Masukkan Password" required>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <button class="btn btn-block btn-primary">
                                                {{ __('Log In') }}
                                            </button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <p class="text-right">
                                            @if (Route::has('password.request'))
                                                <a class="" href="{{ route('password.request') }}">Anda
                                                    Lupa Password?
                                                </a>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Don't have an account?
                                        <a href="{{ route('register') }}" class="text-primary">Create</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </form>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
