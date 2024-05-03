<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Hotel</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../plugin/css/app.css">
    <link rel="stylesheet" href="../../plugin/css/backstage/pages/home.css">
    <link rel="stylesheet" href="../../plugin/css/backstage/partials/sidebar.css">
    <link rel="stylesheet" href="../../plugin/css/backstage/partials/navbar.css">

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
        if ($_GET['msg'] == "sc_add") {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                </script>
            ";
        } else if ($_GET['msg'] == "sc_up") {
            echo "
                <script>
                    alert('Data berhasil diubah');
                </script>
            ";
        } else if ($_GET['msg'] == "sc_dl") {
            echo "
                <script>
                    alert('Data berhasil dihapus');
                </script>
            ";
        }
    }
    ?>
    <!-- Cek Login End -->

    <!-- Body Start -->
    <div class="body">
        <!-- Sidebar Start -->
        <aside class="sidebars">
            <!-- Logo Start -->
            <div class="logo">
                <a href="../home.php">PesanHotel</a>
            </div>
            <!-- Logo End -->

            <!-- Sidebar Navigation Start -->
            <div class="side-bar">
                <li>
                    <a href="../home.php">Dashboard</a>
                </li>
                <li>
                    <a class="active" href="hotel.php">Hotel</a>
                </li>
                <li>
                    <a href="../city/city.php">Kota</a>
                </li>
                <li>
                    <a href="../room/room.php">Kamar</a>
                </li>
            </div>
            <!-- Sidebar Navigation End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Start -->
        <section class="main">
            <nav class="navbars">
                <h1>Halaman Admin</h1>
                <a href="../../auth/logout.php"><i id="logout" class="bi bi-door-closed"></i> <label for="logout">Logout</label></a>
            </nav>

            <div class="title">
                <h1>Hotel</h1>
                <p>Hotel / <i class="bi bi-building"></i></p>
            </div>

            <div class="content">
                <a href="create.php"><i class="bi bi-plus-circle"></i> <label for="">Tambah</label></a>

                <?php
                $data = mysqli_query($con, "SELECT * FROM hotel_tbl");

                $number = 1;
                ?>
                <div class="wraps">
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Foto Hotel</th>
                            <th>Nama Hotel</th>
                            <th>Kamar Hotel</th>
                            <th>Kota Hotel</th>
                            <th>Harga Hotel</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        $cek = mysqli_num_rows($data);
                        if ($cek > 0) {
                            foreach ($data as $dat) {
                        ?>
                                <tr>
                                    <td><?php echo $number++ ?></td>
                                    <td>
                                        <img src="img/<?php echo $dat['photo_hotel']; ?>" alt="<?php echo $dat['name_hotel']; ?>">
                                    </td>
                                    <td><?php echo $dat['name_hotel']; ?></td>
                                    <td><?php echo $dat['room_hotel']; ?></td>
                                    <td><?php echo $dat['city_hotel']; ?></td>
                                    <td><?php echo $dat['price_hotel']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $dat['id_hotel']; ?>"><i class="bi bi-pencil"></i></a>
                                        <a href="delete.php?id=<?php echo $dat['id_hotel']; ?>"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else if ($cek == 0) {
                            ?>
                            <tr>
                                <td colspan="7">Tidak ada kota yang diinput.</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </section>
        <!-- Main End -->
    </div>
    <!-- Body End -->
</body>

</html>