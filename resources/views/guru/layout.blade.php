<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/template-home.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel= "stylesheet"
        href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/template-home.css">
    <link rel="stylesheet" href="assets/css/template-laporan.css">
    <link rel="stylesheet" href="assets/css/template-leaderboard.css">
    <link rel="stylesheet" href="assets/css/template-jadwal.css">
    <link rel="stylesheet" href="assets/css/template-event.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Righteous&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title>CleanClass</title>
    <link rel="icon" href="assets/images/icon.ico">
</head>

<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <img src="assets/images/started.png" alt="">
        <span class="text">CleanClass</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ Request::is('home-guru') ? 'active' : '' }}">
            <a href="/home-guru" id="sidebar-guru">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Home</span>
            </a>
        </li>
        <li class="{{ Request::is('leaderboard-guru') ? 'active' : '' }}">
            <a href="/leaderboard-guru" id="sidebar-leaderboard-guru">
                <i class='bx bx-trophy'></i>
                <span class="text">Leaderboard</span>
            </a>
        </li>
        <li class="{{ Request::is('jadwal-guru') ? 'active' : '' }}">
            <a href="/jadwal-guru" id="sidebar-jadwal-guru">
                <i class='bx bxs-calendar'></i>
                <span class="text">Jadwal</span>
            </a>
        </li>
        <li class="{{ Request::is('event-guru') ? 'active' : '' }}">
            <a href="/event-guru" id="sidebar-event-guru">
                <i class='bx bxs-calendar-event'></i>
                <span class="text">Kegiatan</span>
            </a>
        </li>
        <li class="{{ Request::is('laporan-guru') ? 'active' : '' }}">
            <a href="/laporan-guru" id="sidebar-laporan-guru">
                <i class='bx bxs-file'></i>
                <span class="text">Laporan</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="/login-siswa" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->

<body>
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <input type="checkbox" id="switch-mode" hidden>

            <div class="right-section">
                <div class="profile">
                    <div>
                        <h4>Wildan Tisna Surya S.T.</h4>
                        <p>NIP. 194925455791200399</p>
                    </div>
                    <a>
                        <img src="assets/images/teacher.png">
                    </a>
                </div>
            </div>
            {{-- <div class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">7</span>
            </div> --}}
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        @yield('content')
        <!-- MAIN -->

    </section>
    <!-- CONTENT -->
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>