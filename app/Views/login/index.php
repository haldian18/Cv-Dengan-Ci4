<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light justify-content-center">
        <div class="container-fluid justify-content-center"></div>
        <span class="navbar-brand h1">
            <marquee>Silahkan Masukan Akun Anda</marquee>
        </span>
    </nav>
    <div class="card-header text-center">
        <br>
        <img src="/asset/img/a.png" alt="a.png" class="rounded-circle" alt="..." width="15%">
    </div>
    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header bg-warning text-center">
                LOGIN ACCOUNT

            </div>
            <div class="card-body">

                <form action="/auth/index" method="POST">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-warning">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="MasukkanUsername" class="form-label">
                            Username
                        </label>
                        <input type="text" class="form-control is-invalid" name="username" class="form-control" value="<?php echo session()->getFlashdata('username') ?>" id="MasukkanUsername" placeholder="Masukkan Username Anda" aria-describedby="validationServer03Feedback" required>
                    </div>
                    <div class="mb-3">
                        <label for="MasukkanPassword" class="form-label">
                            Password
                        </label>
                        <input type="password" class="form-control is-invalid" name="password" class="form-control" id="MasukkanPassword" placeholder="Masukkan Password Anda" aria-describedby="validationServer03Feedback" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="auth" class="btn btn-warning" value="Login">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>