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
                            <label for="email-login" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email-login" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="password-login" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-login">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info text-white">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Register -->
        <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="daftarLabel">Daftar Safina</h5>
                        <a class="m-auto" href="#"><img class="nav-logo" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Panjang</label>
                            <input type="text" class="form-control" id="nama" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="email-daftar" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email-daftar" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="password-daftar" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-daftar">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info text-white">Daftar</button>
                    </div>
                </div>
            </div>
        </div>