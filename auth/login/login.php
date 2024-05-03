<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../plugin/css/app.css">
    <link rel="stylesheet" href="../../plugin/css/partials/navbar.css">
    <link rel="stylesheet" href="../../plugin/css/pages/login.css">
    <link rel="stylesheet" href="../../plugin/css/partials/footer-login.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="">
</head>

<body>
    <!-- Cek Login Start -->
    <?php
    include "../../connection/connection.php";

    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "sc_lg") {
            echo "
                <script>
                    alert('Silahkan Login Terlebih Dahulu untuk Memesan Hotel');
                </script>
            ";
        } else if ($_GET['msg'] == "fl_lg") {
            echo "
                <script>
                    alert('Gagal Login, Silahkan Login Kembali');
                </script>
            ";
        } else if ($_GET['msg'] == "") {
            echo "
                <script>
                    alert('Gagal Login, Silahkan Login Kembali');
                </script>
            ";
        }
    }
    ?>
    <!-- Cek Login End -->

    <!-- Navbar Start -->
    <nav class="navbars">
        <!-- Navbar Top Start -->
        <div class="nav-top">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.php">
                    <h1>PesanHotel</h1>
                </a>
            </div>
            <!-- Logo End -->

            <!-- Button Start -->
            <div class="btn">
                <a href="../../auth/register/register.php">Daftar</a>
                <a href="../../auth/login/login.php">Login</a>
            </div>
            <!-- Button End -->
        </div>
        <!-- Navbar Top End -->

        <!-- Navbar Bott Start -->
        <div class="nav-bott">
            <a href="../../index.php"><i class="bi bi-columns-gap"></i> <label for="">Akomodasi</label></a>
            <a href="../../pages/hotel/hotel.php"><i class="bi bi-building"></i> <label for="">Hotel</label></a>
            <a href="../../pages/room/room.php"><i class="bi bi-door-open"></i> <label for="">Kamar</label></a>
            <a href="../../pages/about/about.php"><i class="bi bi-info-circle"></i> <label for="">Tentang Kami</label></a>
        </div>
        <!-- Navbar Bott End -->
    </nav>
    <!-- Navbar End -->

    <section class="login-page">
        <div class="login">
            <h1>Login Akun</h1>

            <form action="login-act.php" method="post" class="form-login">
                <div class="input-login">
                    <label for="username">Username</label>
                    <div class="inp">
                        <input type="text" name="username" id="username" placeholder="Masukkan alamat username Anda" autofocus required>
                    </div>
                </div>

                <div class="input-login">
                    <label for="password">Password</label>
                    <div class="inp">
                        <input type="password" name="password" id="password" placeholder="Masukkan alamat password Anda" required>
                    </div>
                </div>

                <input class="sub-login" type="submit" name="login" id="" value="Login">
            </form>
        </div>
    </section>

    <!-- Footer Start -->
    <footer class="footer">
        <?php
        include "../../partials/footer.php";
        ?>
    </footer>
    <!-- Footer End -->
</body>

</html>