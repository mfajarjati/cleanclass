<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- font balsamiq --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Righteous&display=swap"
        rel="stylesheet">

    {{-- boxicons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{-- name and icon website --}}
    <title>CleanClass</title>
    <link rel="icon" href="assets/images/icon.ico">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/template-started.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!--  Preloader Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#how-to-work">How to Work</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section">
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="footer col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Selamat Datang di <em>CleanClass</em></h2>
                                        <p>Sebuah platform website inovatif untuk meningkatkan kualitas kebersihan kelas
                                            dan mewujudkan lingkungan belajar yang bersih dan sehat!</p>
                                        <button class="button__login" id="open-modal">
                                            <a>Login</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/started.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area SEnd ***** -->

    <!-- Modal option guru and siswa Start-->
    <section class="modal-container">
        <div class="blur-background"></div>
        <div class="modal__container" id="modal-container">
            <div class="modal__content">
                <div class="modal__close close-modal" title="Close">
                    <i class='bx bx-x'></i>
                </div>
                <h1 class="modal__title">Login Sebagai?</h1>
                <a href="/login-guru" class="modal__button2 modal__button-width">
                    Guru
                </a>
                <a href="/login-siswa" class="modal__button2 modal__button-width">
                    Siswa
                </a>
            </div>
        </div>
    </section>
    <hr class="mb-1" />
    <!-- Modal option guru and siswa End-->

    <!-- ***** How to work Area Start ***** -->
    <div id="how-to-work" class="how-to-work section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-how-to-work wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>How <em>CleanClass</em> Work?</h4>
                        <div class="line-dec"></div>
                        <br>
                        <p>Website ini bekerja dengan melakukan beberapa hal penting yang menarik, diantaranya:</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <i class="fas"> <img src="assets/images/Signing.png" alt=""></i>
                        <h4>Proses Masuk</h4>
                        <p>Siswa dan wali kelas dapat masuk ke dalam platform dengan akun mereka masing-masing.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <i class="fas"> <img src="assets/images/Agenda.png" alt=""></i>
                        <h4>Penjadwalan Piket</h4>
                        <p>Siswa dapat melihat jadwal piket mereka di dashboard mereka setelah masuk.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <i class="fas"> <img src="assets/images/Approval.png" alt=""></i>
                        <h4>Persetujuan</h4>
                        <p>Wali kelas memeriksa dan menyetujui kehadiran siswa dalam piket tiap minggunya.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <i class="fas"> <img src="assets/images/popular.png" alt=""></i>
                        <h4>Perhitungan Point</h4>
                        <p>Setiap kali siswa hadir pada piket, mereka mendapatkan poin dari wali kelasnya.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="1s">
                        <i class="fas"> <img src="assets/images/Leaderboard.png" alt=""></i>
                        <h4>Pengelolaan Leaderboard</h4>
                        <p>Leaderboard menampilkan kelas mana yang memiliki total poin tertinggi.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-to-work-item show-up header-text wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="1s">
                        <i class="fas"> <img src="assets/images/Report.png" alt=""></i>
                        <h4>Pemantauan dan Pelaporan</h4>
                        <p>Laporan dapat dibuat untuk menganalisis partisipasi siswa dan peringkat kelas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** How to work Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <footer id="about" class="text-center text-lg-start text-white" style="background-color: #50b0e0">
        <div class="p-4 pb-0">
            <section>
                <div class="row wow fadeInUp">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="right-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/cleanclasslogo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="created-by">
                            <h5 class="text-black fw-bold">Created by</h5>
                            <ul>
                                <li>
                                    <a class="text-white">Laravel</a>
                                </li>
                            </ul>
                            <h5 class="powered text-black fw-bold">Powered by</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="text-white">wilimaxs.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-black fw-bold">Section</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="#how-to-work" class="text-white">How to Work</a>
                            </li>
                            <li>
                                <a href="#about" class="text-white">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <br>

        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-6 mx-auto">
                    <h5 class="text-black fw-bold">Be our friends</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="text-white">Firda Rosela Sundari</a>
                        </li>
                        <li>
                            <a class="text-white">Hammam Abdurrahman</a>
                        </li>
                        <li>
                            <a class="text-white">Muhammad Fajar Jati Permana</a>
                        </li>
                        <li>
                            <a class="text-white">Najwa Ikhsaniyah</a>
                        </li>
                        <li>
                            <a class="text-white">Wildan Tisna Nugraha</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mx-auto">
                    <h5 class="text-black fw-bold">Universitas Pendidikan Indonesia</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="text-white">Jl. Pendidikan No.15, Cibiru Wetan, Kec. Cileunyi, Kabupaten Bandung,
                                Jawa Barat 40625</a>
                        </li>
                        <li>
                            <a href="https://kd-cibiru.upi.edu/" class="text-white"><i
                                    class="fas fa-globe  text-black"></i>
                                https://kd-cibiru.upi.edu/</a>
                        </li>
                        <li>
                            <a class="text-white"><i class="fas fa-phone  text-black"></i> (022) 7801840</a>
                        </li>
                        <li>
                            <a href="mailto:kampus_cibiru@upi.edu" class="text-white"><i
                                    class="fas fa-envelope text-black"></i>
                                kampus_upicibiru@upi.edu</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Copyright -->
        <div class="bawah text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            Copyright by Kelompok 2 - Proyek Konsultasi 2024
        </div>
    </footer>
    <!-- ***** About Area End ***** -->

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/popup.js"></script>
</body>

</html>
