<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= base_url() ?>asset/img/logo.png" type="image/x-icon">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome/css/all.css">

    <!-- My Style -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
    <title>Safina - Login Admin</title>
</head>

<style>
    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
    }
</style>

<body class="">
    <div class="log-admin h-100">
        <div class="d-flex flex-column justify-content-center align-content-center h-100">
            <div class="row justify-content-center p-0 mx-0 mb-3">
                <div class="log-admin-logo justify-content-center d-flex col-lg-6 col-md-8">
                    <img class="w-50" src="<?= base_url('asset/img/') ?>logo.png" alt="">
                </div>
            </div>

            <form class="row justify-content-center mx-0" action="<?= base_url('admin/admindashboard') ?>" method="post">
                <div class="col-md-4 col-lg-3 col-10 col-sm-5 rounded p-3 shadow-lg border border-white ">
                    <div class="fs-4 text-white text-center mb-3">
                        Sign In Admin Safina
                    </div>
                    <div class="mb-3">
                        <input style="font-size: 1.1rem;" class="form-control py-2 px-3" type="text" placeholder="Email/Username" aria-label="">
                    </div>
                    <div class="mb-3">
                        <input style="font-size: 1.1rem;" class="form-control py-2 px-3" type="password" id="password" name="password" placeholder="Password" aria-label="">
                    </div>
                    <div>
                        <button style="font-size: 1.1rem;" type="submit" class="btn-brown rounded border-0 text-white py-2 form-control">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>asset/vendor/fontawesome/js/all.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>