<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Union</title>
    <link rel="icon" href="<?= base_url('img/favicon.png') ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/land.css') ?>" />
</head>

<body class="d-flex">
    <div class="container full-screen">
        <nav class="navbar navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="img/union.png" class="img-fluid">
            </a>
        </nav>

        <div class="row pt-5">
            <div class="col teks justify-content-center">
                <h1 class="row">Temukan berbagai kesempatan lomba yang menantang dan memperluas wawasan Anda.</h1>
                <button id="show-login" class="row d-flex justify-content-center align-items-center">Login</button>
            </div>
            <div class="col pl-5">
                <img src="img/hero_image.png" class="img-fluid pl-5" alt="...">
            </div>
        </div>
    </div>

    <div class="popup-content user">
        <div class="popup">
            <div class="close-btn">&times;</div>
            <form class="form" action="login.php" method="post">
                <h2>Log in</h2>
                <div class="form-element">
                    <label for="NIM">Username</label>
                    <input type="text" id="NIM" name="NIM" placeholder="Enter Username">
                </div>
                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-element">
                    <button type="submit" class="btn">Sign in</button>
                </div>
                <div class="form-element">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="form-element" id="login-admin">
                    <a href="#">Login as Admin</a>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-content admin">
        <div class="popup">
            <div class="close-btn">&times;</div>
            <form class="formadmin" action="loginadmin.php" method="post">
                <h2>Log in Admin</h2>
                <div class="form-element">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-element">
                    <button type="submit" class="btn">Sign in</button>
                </div>
                <div class="form-element">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="form-element" id="login-user">
                    <a href="#">Login as User</a>
                </div>
            </form>
        </div>
    </div>

    <script src="<?= base_url('js/land.js') ?>"></script>
</body>

</html>