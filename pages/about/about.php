<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tentang Kami</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../plugin/css/app.css">
    <link rel="stylesheet" href="../../plugin/css/partials/navbar.css">
    <link rel="stylesheet" href="../../plugin/css/pages/About.css">
    <link rel="stylesheet" href="../../plugin/css/partials/footer.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="">
</head>

<body>
    <?php
    include "../../connection/connection.php";

    session_start();
    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == "login" && $_SESSION['level'] == "user") {
            echo $_SESSION['username'];
        } else if ($_SESSION['status'] == "login" && $_SESSION['level'] == "admin") {
            echo $_SESSION['username'];
        } else if ($_SESSION['status'] != "login") {
            echo $_SESSION['username'];
        }
    }
    ?>

    <!-- Navbar Start -->
    <nav class="navbars">
        <!-- Navbar Top Start -->
        <div class="nav-top">
            <!-- Logo Start -->
            <div class="logo">
                <a href="../../index.php">
                    <h1>PesanHotel</h1>
                </a>
            </div>
            <!-- Logo End -->

            <!-- Button Start -->
            <div class="btn">
                <?php
                if (isset($_SESSION['status'])) {
                    if ($_SESSION['status'] == "login" && $_SESSION['level'] == "user") {
                        echo '
                                    <div class="user" style="display: flex; align-items: center;">
                                        <h1 style="margin: 0 1rem 0 0;color: var(--fo1);">' . $_SESSION["username"] . '</h1>
                                        <a href="../../auth/logout.php">Logout</a>
                                    </div>
                            ';
                    } else if ($_SESSION['status'] != "login") {
                        echo '
                                    <a href="../../auth/register/register.php">Daftar</a>
                                    <a href="../../auth/login/login.php">Login</a>
                                ';
                    }
                } else {
                    echo '
                                <a href="../../auth/register/register.php">Daftar</a>
                                <a href="../../auth/login/login.php">Login</a>
                            ';
                }
                ?>
            </div>
            <!-- Button End -->
        </div>
        <!-- Navbar Top End -->

        <!-- Navbar Bott Start -->
        <div class="nav-bott">
            <a href="../../index.php"><i class="bi bi-columns-gap"></i> <label for="">Akomodasi</label></a>
            <a href="../hotel/hotel.php"><i class="bi bi-building"></i> <label for="">Hotel</label></a>
            <a href="../room/room.php"><i class="bi bi-door-open"></i> <label for="">Kamar</label></a>
            <a class="active" href="about.php"><i class="bi bi-info-circle"></i> <label for="">Tentang Kami</label></a>
        </div>
        <!-- Navbar Bott End -->
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <section class="content">
        <h1>Pemesanan Hotel Terpercaya</h1>
        <p>PesanHotel Indonesia</p>

        <!-- About Start -->
        <div class="about">
            <div class="desc">
                <div class="about-top">
                    <h1>PesanHotel</h1>
                    <p>PesanHotel merupakan salah satu situs pemesanan hotel Indonesia terpercaya. Dalam pengoperasiannya PesanHotel selalu mengutamakan kepuasan pelanggan selama penginapan demi kenyamanan selama destinasi ke berbagai kota. Anda dapat mempercayai kami untuk permasalahan kamar inap untuk menyempurnakan liburan, destinasi, healing, dan menginap sementara.</p>
                </div>

                <div class="about-bot">
                    <h1>Kontak</h1>
                    <div class="about-btn">
                        <a href=""><i class="bi bi-whatsapp"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>

            <div class="about-img">
                <img src="../../plugin/img/about.jpg" alt="">
            </div>
        </div>
        <!-- About End -->

        <!-- Login Start -->
        <div class="login">
            <?php
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] == "login" && $_SESSION['level'] == "user") {
                    echo '
                                <h1>Silahkan pilih hotel berdasarkan destinasi Anda</h1>
                                <p>Selamat Datang ' . $_SESSION["username"] . '</p>
                            ';
                } else if ($_SESSION['status'] != "login") {
                    echo '
                                <h1>Login Untuk Booking</h1>
                                <p>Silahkan login terlebih dahulu</p>
                                <span><a href="../../auth/login/login.php">Login</a></span>
                            ';
                }
            } else {
                echo '
                            <h1>Login Untuk Booking</h1>
                            <p>Silahkan login terlebih dahulu</p>
                            <span><a href="../../auth/login/login.php">Login</a></span>
                        ';
            }
            ?>
        </div>
        <!-- Login End -->
    </section>
    <!-- Content End -->

    <!-- Footer Start -->
    <footer class="footer">
        <!-- Footer Top Start -->
        <div class="foot-top">
            <?php
            if (isset($_SESSION['status'])) {
                if ($_SESSION['status'] == "login" && $_SESSION['level'] == "user") {
                    echo '
                            <h1 style="margin: 0 1rem 0 0;color: var(--fo1);">' . $_SESSION["username"] . '</h1>
                    ';
                } else if ($_SESSION['status'] != "login") {
                    echo '
                            <a href="../../auth/register/register.php">Daftar</a>
                        ';
                }
            } else {
                echo '
                        <a href="../../auth/register/register.php">Daftar</a>
                    ';
            }
            ?>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bott Start -->
        <?php
        include "../../partials/footer.php";
        ?>
        <!-- Footer Bott End -->
    </footer>
    <!-- Footer End -->
</body>

</html>