<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrent : Masuk ?</title>
    <link rel="stylesheet" href="./css/log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    footer {
        border-inline: 2px;
        border-color: black;
    }

    .kakii {
        margin-left: 32%;
        position: fixed;
        bottom: 0px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Masuk</div>
            <div class="title signup">Registrasi</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Daftar</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="auth/login" class="login" method="post">
                    <div class="field">
                        <input type="text" name="email" placeholder="Masukan Email" class="form-control">
                        <!--<input type="text" placeholder="Masukan Email " required>-->
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Masukan Password" class="form-control">
                        <!--<input type="password" placeholder="Masukan Password" required>-->
                    </div>
                    <div class="pass-link"><a href="forget">Lupa password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Belum punya akun ? <a href="">Daftar</a></div>
                </form>

                <form action="auth/reg" class="signup" method="post">
                    <div class="field">
                        <input type="text" placeholder="Masukan Nama" required>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Masukan Email" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Masukan Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="repassword" placeholder="Ulangi password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Daftar">
                    </div>
                    <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
                </form>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p class="kakii">Created by KepomPong and ErKing · Powered By Code_Igniter_4 &copy;2023</p>
    </footer>

    <script src="js/log.js"></script>
</body>

</html>