<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Safina - <?= $title ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>asset/img/logo.png" type="image/x-icon">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome/css/all.css">

    <!-- My Style -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar w-100 position-fixed navbar-expand-lg bg-white border-bottom">
            <div class="container-fluid mx-4 my-2">
                <a class="navbar-brand" href="<?= base_url() ?>"><img class="nav-logo" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto ps-5">
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php
                                                if ($active == 'home') {
                                                    echo 'text-b-brown';
                                                }
                                                ?>" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php
                                                if ($active == 'tiket') {
                                                    echo 'text-b-brown';
                                                }
                                                ?>" href="<?= base_url() ?>tiket/">Penerbangan</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php
                                                if ($active == 'hotel') {
                                                    echo 'text-b-brown';
                                                }
                                                ?>" href="<?= base_url() ?>hotel/hotels">Hotel</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php
                                                if ($active == 'visa') {
                                                    echo 'text-b-brown';
                                                }
                                                ?>" href="<?= base_url() ?>visa/">Visa</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link btn-blue rounded text-white px-3 <?php
                                                                                if ($active == 'umroh') {
                                                                                    echo 'active-nav';
                                                                                }
                                                                                ?>" href="<?= base_url() ?>paketumroh/">Paket Umrah</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link btn-blue rounded text-white px-3 <?php
                                                                                if ($active == 'haji') {
                                                                                    echo 'active-nav';
                                                                                }
                                                                                ?>" href="<?= base_url() ?>pakethaji/">Paket Haji</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Paket Umroh
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Tiket</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-1">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                                <i class="fa-solid fa-right-to-bracket"></i> Login
                            </button>
                        </li>
                        <li class="nav-item mx-1">
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#daftar">
                                <i class="fa-solid fa-user"></i> Daftar
                            </button>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Modal Login -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginLabel">Login Safina</h5>
                        <a class="m-auto" href="#"><img class="nav-logo" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="idlog" class="form-label">Email</label>
                            <input type="email" class="form-control" id="idlog" name="idlog" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="passwordlog" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordlog" name="passwordlog">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info text-white">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Register -->
        <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftarLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="daftarLabel">Daftar Safina</h5>
                        <a class="m-auto" href="#"><img class="nav-logo" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url() ?>user/registration/" method="post">
                            <div class="modal-body overflow-auto" style="height: 65vh;">
                                <div><b>Data Login</b></div>
                                <hr>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="password1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password1" id="password1">
                                </div>
                                <div class="mb-3">
                                    <label for="password2" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="password2" id="password2">
                                </div>
                                <div><b>Data Pribadi</b></div>
                                <hr>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Panjang</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="" max="20">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="mb-3">Tempat/ Tgl Lahir</label>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="pob" name="pob" autocomplete="off" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="date" name="dob" class="form-control" id="dob" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="mb-3">Jenis Kelamin</label>
                                    <div class="">
                                        <select name="sex" class="form-select" aria-label="Default select example">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="L">Laki - laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="telp" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="national" class="form-label">Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="national" name="national" placeholder="">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info text-white">Daftar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>