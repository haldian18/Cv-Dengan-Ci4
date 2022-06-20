<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>CV</title>
</head>

<body>
    <nav class="navbar bg-dark p-2 navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarScroll">
                <a class="navbar-brand text-light" href="cv">Haldian</a>
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="text-warning nav-link outline-warning active" aria-current="page" href="<?php echo site_url('cv/add/' . $data['id']); ?>">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-warning nav-link outline-warning active" aria-current="page" href="<?php echo site_url('cv/get_edit/' . $data['id']); ?>">Update Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-warning nav-link outline-warning active" aria-current="page" href="<?php echo site_url('cv/delete/' . $data['id']); ?>">Delete Data</a>
                    </li>
                </ul>
                <form class="mt-2 d-flex" role="logout">
                    <a class="btn text-light text-light btn-outline-warning" aria-current="page" href="<?php echo site_url('cv/logout/' . $data['id']); ?>">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="bg-warning container-fluid p-5">
        <div class="row d-flex justifay-content-center">
            <div class="col-lg-12 col-xs-8">
                <div class="text-center">
                    <img src="/asset/img/aldi.jpg" class="rounded-circle" alt="..." width="15%">
                    <h1 class="pt-2 "><?= $data['nama'] ?></h1>
                    <h3><i>Network administrator, Programmer & DevOps</i></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Riwayat Pendidikan</h1>
                <table class="table table-striped table-hover mx-auto">

                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td> : </td>
                        <td><?= $data['pergruan_tinggi'] ?></td>
                    </tr>
                    <br>
                    <tr>
                        <td>SMA</td>
                        <td> : </td>
                        <td><?= $data['sma'] ?></td>
                    </tr>
                    <br>
                    <tr>
                        <td>SMP</td>
                        <td> : </td>
                        <td><?= $data['smp'] ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-3"></div>
            <div class="col-4">
                <h1>Detail Informasi</h1>
                <table class="table table-striped table-hover mx-auto">
                    <tr>
                        <td>Alamat</td>
                        <td> : </td>
                        <td><?= $data['alamat'] ?></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Kontak</td>
                        <td> : </td>
                        <td><?= $data['kontak'] ?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td> : </td>
                        <td><?= $data['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td> : </td>
                        <td><?= $data['tanggal_lahir'] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td> : </td>
                        <td><?= $data['tempat_lahir'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="ms-5 col-lg-12 col-xs-12">
            <div class="text-center">
                <h1><i>Tujuan Karir</i></h1>
                <br>
                <p>
                    Tujuan karir saya ke depannya yaitu saya ingin memiiki sebuah starup yang dimana <br>
                    berfokus pada nilai gizi karna indonesia untuk saat ini menduduki nilai gizi terburuk,
                    dimana saya inggin sekali membantu banyak orang dengan ilmu dan skill yang saya miliki.
                </p>
                <br>
                <hr>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <br>
                        <h1>Skill</h1>
                        <br>
                        <table class="table table-striped table-hover mx-auto ">
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">HTML</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">CSS</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning  text-black progress-bar" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">JS</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Node</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">PHP</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">Database</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">Java</div>
                            </div>
                            <br>
                            <div class="progress ">
                                <div class="bg-warning text-black progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Network</div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center">
                <br>
                <h1>Pengalaman</h1>
                <br>
                <table class="table table-striped table-hover mx-auto">
                    <tr>
                        <td>Search Enggine Optimization</td>
                        <td> : </td>
                        <td>CV.Rumah Mesin</td>
                    </tr>
                    <br>
                    <tr>
                        <td>IT Support</td>
                        <td> : </td>
                        <td>PT.FTF Global Indo</td>
                    </tr>
                    <tr>
                        <td>Frilance</td>
                        <td> : </td>
                        <td>Web Desain</td>
                    </tr>
                    <tr>
                        <td>Frilance</td>
                        <td> : </td>
                        <td>Blogging</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid p-1 bg-dark">
        <div class="row justifay-content-center">
            <div class="col-lg-12 col-xs-8">
                <div class="text-warning text-center">
                    <h6 class="fontitalic"> &copy; Copyright 2022
                        All Right Reserved. By Haldian</h6>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>