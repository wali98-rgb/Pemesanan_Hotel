<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kamar</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../plugin/css/app.css">
    <link rel="stylesheet" href="../../plugin/css/partials/navbar.css">
    <link rel="stylesheet" href="../../plugin/css/pages/room.css">
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
            <a class="active" href="room.php"><i class="bi bi-door-open"></i> <label for="">Kamar</label></a>
            <a href="../about/about.php"><i class="bi bi-info-circle"></i> <label for="">Tentang Kami</label></a>
        </div>
        <!-- Navbar Bott End -->
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <section class="content">
        <h1>Kamar hotel sempurna untuk penginapan menyenangkan</h1>
        <p>Kamar inap nyaman untuk destinasi</p>

        <!-- Ragam Kamar Start -->
        <div class="room">
            <h1>Kamar Inap</h1>
            <p>Pilih kamar impian</p>

            <!-- Kamar Berdasarkan Hotel Start -->
            <div class="rooms" style="display: flex; justify-content: center; flex-wrap: wrap;">
                <?php
                include "../../connection/connection.php";

                $data = mysqli_query($con, "SELECT * FROM hotel_tbl");

                $cek = mysqli_fetch_assoc($data);

                if ($cek > 0) {
                    foreach ($data as $dat) {
                ?>
                        <a style="margin: .5rem; color: var(--fo2)" href="show.php?id=<?php echo $dat['id_hotel']; ?>">
                            <div class="rooms-img">
                                <img src="../../backstage/hotel/img/<?php echo $dat['photo_hotel']; ?>" alt="<?php echo $dat['name_hotel']; ?>">
                            </div>

                            <div class="desc">
                                <div class="title">
                                    <h1><?php echo $dat['name_hotel']; ?></h1>
                                    <p>Rp.<?php echo $dat['price_hotel']; ?></p>
                                </div>

                                <div class="status">
                                    <span><?php ?></span>
                                </div>
                            </div>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
            <!-- Kamar Berdasarkan Hotel End -->
        </div>
        <!-- Ragam Kamar End -->

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