<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Data Diri</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>From Update Data</h1>
            </div>
        </div>

        <form action="/cv/update" method="POST">
            <div class="row mt-3 form-floatin">
                <div class="col-lg-3">
                    <label for="">Nama</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
            </div>


            <div class=" row mt-3">
                <div class="col-lg-3">
                    <label for="">Perguruan Tinggi</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="pergruan_tinggi" placeholder="Perguruan Tinggi">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">SMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="sma" placeholder="SMA">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="floatingInput">SMP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="smp" placeholder="SMP">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Alamat</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Kontak</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="kontak" placeholder="Kontak">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">E-Mail</label>
                </div>
                <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tanggal Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tempat Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col-lg-9">
                    <button class="btn btn-primary" type="submit">simpan</button>

                </div>
            </div>
        </form>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>