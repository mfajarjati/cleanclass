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
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Righteous&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <title>CleanClass</title>
    <link rel="icon" href="assets/images/icon.ico">
</head>

<body>
    <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
    </div>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img src="assets/images/started.png" alt="">
            <span class="text">CleanClass</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-trophy'></i>
                    <span class="text">Leaderboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar'></i>
                    <span class="text">Jadwal</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar-event'></i>
                    <span class="text">Event</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-file'></i>
                    <span class="text">Laporan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <input type="checkbox" id="switch-mode" hidden>

            <div class="right-section">
                {{-- <div class="notification">
                    <i class='bx bxs-bell'></i>
                    <span class="num">7</span>
                </div> --}}
                <div class="profile">
                    <div>
                        <h4>Firda Rosela Sundari</h4>
                        <p>Kelas 7B</p>
                    </div>
                    <a href="#">
                        <img src="assets/images/cat.jpg">
                    </a>
                </div>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            {{-- <div class="head-title">
                <div class="left">
                    <h1>Over<em>view</em></h1>
                    </ul>
                </div>
            </div> --}}

            <ul class="box-info">
                <li>
                    <i class='bx bxs-user'></i>
                    <span class="text">
                        <h3>Wali Kelas</h3>
                        <p>Wildan Tisna Surya M.T.</p>
                    </span>
                </li>
                {{-- <li>
                    <i class='bx bxs-door-open'></i>
                    <span class="text">
                        <h3>Kelas</h3>
                        <p>7B</p>
                    </span>
                </li> --}}
                <li>
                    <i class='bx bxs-medal'></i>
                    <span class="text">
                        <h3>Point</h3>
                        <p>20</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar'></i>
                    <span class="text">
                        <h3>Berikutnya</h3>
                        <p>Senin, 22 April 2024</p>
                    </span>
                </li>
            </ul>



            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Laporan</h3>
                        <a href="#" class="btn-download">
                            <span class="text">See all</span>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Senin, 4 Maret 2024</p>
                                </td>
                                <td>
                                    <i class='bx bxs-check-circle'></i>
                                </td>
                                <td><span class="status completed">Piket</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Senin, 26 Februari 2024</p>
                                </td>
                                <td>
                                    <i class='bx bxs-x-circle'></i>
                                </td>
                                <td><span class="status pending">Tidak Piket</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Senin, 19 Februari 2024</p>
                                </td>
                                <td>
                                    <i class='bx bxs-check-circle'></i>
                                </td>
                                <td><span class="status completed">Piket</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Senin, 12 Februari 2024</p>
                                </td>
                                <td>
                                    <i class='bx bxs-check-circle'></i>
                                </td>
                                <td><span class="status completed">Piket</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Senin, 5 Februari 2024</p>
                                </td>
                                <td>
                                    <i class='bx bxs-check-circle'></i>
                                </td>
                                <td><span class="status completed">Piket</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Leaderboard</h3>
                        <a href="#" class="btn-download">
                            <span class="text">See all</span>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                    <ul class="todo-list">
                        <li class="juara1">
                            <i class="las la-trophy"></i>
                            <p>Kelas 7B</p>
                            <a href="#" class="btn-download">
                                <span class="text">500 point</span>
                            </a>
                        </li>
                        <li class="juara2">
                            <i class="las la-medal"></i>
                            <p>Kelas 8B</p>
                            <a href="#" class="btn-download">
                                <span class="text">480 point</span>
                            </a>
                        </li>
                        <li class="juara3">
                            <i class="las la-award"></i>
                            <p>Kelas 9A</p>
                            <a href="#" class="btn-download">
                                <span class="text">460 point</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
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
