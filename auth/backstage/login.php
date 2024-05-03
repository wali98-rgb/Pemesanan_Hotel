<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../plugin/css/app.css">
    <link rel="stylesheet" href="../../plugin/css/backstage/login.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="icon" href="">
</head>

<body>
    <!-- Login Start -->
    <section class="login-page">
        <div class="login">
            <a href="../../index.php">Halaman Login</a>

            <form action="../login/login-act.php" method="post">
                <div class="inp">
                    <input type="text" name="username" id="username" placeholder="Username" autofocus required>
                </div>

                <div class="inp">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <input class="sub-log" type="submit" name="login" id="login" value="Login">
            </form>
        </div>
    </section>
    <!-- Login End -->
</body>

</html>