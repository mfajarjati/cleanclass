<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Righteous&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    {{-- <title>CleanClass</title>
    <link rel="icon" href="assets/images/icon.ico"> --}}

    <!-- Bootstrap core CSS -->
    <title>CleanClass</title>
    <link rel="icon" href="assets/images/icon.ico">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="">
    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-gqqflRCy6cJhpzLAc45h5zkNzdpc+ra04+GmyU8dVtNVYuhO4fukn7D/5lxMC8OV" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/template-login.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    {{-- <link rel="stylesheet" href="assets/css/template-started.css"> --}}
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
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

    <div class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <a href="/" class='back-arrow'>
            <i class='bx bx-arrow-back'></i>
        </a>

        <div class="logo">
            <img src="assets/images/logo.png" alt="Logo">
        </div>
    </div>

    <div class="l-form header-text" data-wow-duration="1s" data-wow-delay="0.1s">
        <div class="form">
            <img src="assets/images/started.png" alt="" class="form__img">
            <form action="" class="form__content">
                <h1 class="form__title">Selamat Datang di <em>CleanClass</em></h1>
                <p href="">Silahkan masukkan NIS dan Password Anda.</p>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">NIS</label>
                        <input type="text" class="form__input">
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Password</label>
                        <input type="password" class="form__input" id="password">
                    </div>
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>

                </div>

                <div class="col-lg-12">
                    <div class="form_button">
                        <a href="/contact">Login</a>
                    </div>
                </div>
            </form>

        </div>

    </div>

    <!-- ===== MAIN JS ===== -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/login-form.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
