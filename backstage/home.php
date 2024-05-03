<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../plugin/css/app.css">
    <link rel="stylesheet" href="../plugin/css/backstage/pages/home.css">
    <link rel="stylesheet" href="../plugin/css/backstage/partials/sidebar.css">
    <link rel="stylesheet" href="../plugin/css/backstage/partials/navbar.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="">
</head>

<body>
    <!-- Body Start -->
    <div class="body">
        <!-- Sidebar Start -->
        <aside class="sidebars">
            <!-- Logo Start -->
            <div class="logo">
                <a href="home.php">PesanHotel</a>
            </div>
            <!-- Logo End -->

            <!-- Sidebar Navigation Start -->
            <div class="side-bar">
                <li>
                    <a class="active" href="home.php">Dashboard</a>
                </li>
                <li>
                    <a href="hotel/hotel.php">Hotel</a>
                </li>
                <li>
                    <a href="city/city.php">Kota</a>
                </li>
                <li>
                    <a href="room/room.php">Kamar</a>
                </li>
            </div>
            <!-- Sidebar Navigation End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Start -->
        <section class="main">
            <nav class="navbars">
                <h1>Halaman Admin</h1>
                <a href="../auth/logout.php"><i id="logout" class="bi bi-door-closed"></i> <label for="logout">Logout</label></a>
            </nav>

            <div class="title">
                <h1>Home</h1>
                <p>Home / <i class="bi bi-house"></i></p>
            </div>

            <div class="content">
                <h1>Selamat Datang Admin</h1>

                <?php
                echo date('D, d/M/Y');
                ?>
            </div>
        </section>
        <!-- Main End -->
    </div>
    <!-- Body End -->
</body>

</html>