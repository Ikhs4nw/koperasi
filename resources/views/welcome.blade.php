<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('soft-ui') }}/assets/img/logokoperasi.png">
    <title>Koperasi SAM | Home</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('soft-ui') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('soft-ui') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('soft-ui') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('soft-ui') }}/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
    <!-- Sweet - Alert -->
    @if ((session('success') === 'Delete Account Success!') || (session('success') === 'Successfully Exited'))
        @include('sweetalert::alert')
    @endif
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                            <img src="{{ asset('soft-ui') }}/assets/img/logokoperasi.png" alt="" width="5%"
                                style="margin-right: 10px">Admin Koperasi Surya Abadi Mandiri
                        </a>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-xl-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h2 class="font-weight-bolder text-dark text-gradient">Selamat Datang Admin </h2>
                                    <p style="font-size: 27px"> Koperasi Surya Abadi Mandiri</p>
                                    <p class="mb-0">Masuk menggunakan akun yang sudah terdaftar, bila belum terdaftar
                                        maka daftar terlebih dahulu</p>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('login') }}">
                                        <button type="button"
                                            class="btn bg-gradient-dark w-50 mt-4 mb-0 position-left">Masuk</button>
                                    </a>
                                </div>
                                <div class="card-footer pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-5">
                                        Belum punya akun?
                                        <a href="{{ route('register') }}"
                                            class="text-info text-gradient font-weight-bold">Daftar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8 mt-8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('soft-ui') }}/assets/img/koperasi.jpeg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('soft-ui') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('soft-ui') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('soft-ui') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('soft-ui') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
