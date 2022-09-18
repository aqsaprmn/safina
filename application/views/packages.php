<!-- Carosul -->
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner h-100">
        <div class="carousel-item active caro-img">
            <img src="<?= base_url() ?>asset/img/mekah.jpeg" class="d-block w-100 " alt="Makkah">
        </div>
        <div class="carousel-item caro-img">
            <img src="<?= base_url() ?>asset/img/hotel.jpeg" class="d-block w-100" alt="Hotel">
        </div>
        <div class="carousel-item caro-img">
            <img src="<?= base_url() ?>asset/img/pesawat.jpeg" class="d-block w-100" alt="Pesawat">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Carosul -->
<!-- Best Deals -->
<div class="best py-5">
    <div class="best-container">
        <div class="best-title pb-5 text-center">
            <h1><span class="text-b-brown">Hotel</span> <span class="text-b-blue">Penawaran Terbaik</span></h1>
        </div>
        <div class="row px-5 mx-0">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card" style="width: 24rem;">
                    <a href="<?= base_url() ?>hotel/"><img src="<?= base_url() ?>asset/img/hilton.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Hilton Makkah Conventional Hotel</h5>
                        <p class="card-text"><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><b>Jarak:</b></h6>
                            <div>
                                <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 100 meter</span>
                            </div>
                            <div>
                                <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 200 meter</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h6><b>Fasilitas:</b></h6>
                            <div class="fasilitas">
                                <table>
                                    <tr>
                                        <td><i class="fa-solid fa-wifi"></i></td>
                                        <td>Wifi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-utensils"></i></td>
                                        <td>Restoran</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-square-parking"></i></td>
                                        <td>Parkir Gratis</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-bell-concierge"></i></td>
                                        <td>Layanan Kamar</td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                        <li class="list-group-item">Harga Mulai: <b>Rp. 1.567.217</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url() ?>hotel/" class="card-link btn btn-primary">Booking Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card" style="width: 24rem;">
                    <a href="<?= base_url() ?>hotel/"><img src="<?= base_url() ?>asset/img/swissotel.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Swissotel Al Maqam Makkah Hotel</h5>
                        <p class="card-text"><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star"></i></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><b>Jarak:</b></h6>
                            <div>
                                <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 100 meter</span>
                            </div>
                            <div>
                                <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 200 meter</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h6><b>Fasilitas:</b></h6>
                            <div class="fasilitas">
                                <table>
                                    <tr>
                                        <td><i class="fa-solid fa-wifi"></i></td>
                                        <td>Wifi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-utensils"></i></td>
                                        <td>Restoran</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-square-parking"></i></td>
                                        <td>Parkir Gratis</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-bell-concierge"></i></td>
                                        <td>Layanan Kamar</td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                        <li class="list-group-item">Harga Mulai: <b>Rp. 1.567.217</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url() ?>hotel/" class="card-link btn btn-primary">Booking Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card" style="width: 24rem;">
                    <a href="<?= base_url() ?>hotel/alkiswah"><img src="<?= base_url() ?>asset/img/alkiswah.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Al Kiswah Towers Hotel</h5>
                        <p class="card-text"><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><b>Jarak:</b></h6>
                            <div>
                                <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 100 meter</span>
                            </div>
                            <div>
                                <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 200 meter</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h6><b>Fasilitas:</b></h6>
                            <div class="fasilitas">
                                <table>
                                    <tr>
                                        <td><i class="fa-solid fa-wifi"></i></td>
                                        <td>Wifi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-utensils"></i></td>
                                        <td>Restoran</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-square-parking"></i></td>
                                        <td>Parkir Gratis</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-bell-concierge"></i></td>
                                        <td>Layanan Kamar</td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                        <li class="list-group-item">Harga Mulai: <b>Rp. 1.567.217</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url() ?>hotel/" class="card-link btn btn-primary">Booking Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card" style="width: 24rem;">
                    <a href="<?= base_url() ?>hotel/"><img src="<?= base_url() ?>asset/img/infinity.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Infinity Hotel Makkah</h5>
                        <p class="card-text"><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><b>Jarak:</b></h6>
                            <div>
                                <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 100 meter</span>
                            </div>
                            <div>
                                <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 200 meter</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h6><b>Fasilitas:</b></h6>
                            <div class="fasilitas">
                                <table>
                                    <tr>
                                        <td><i class="fa-solid fa-wifi"></i></td>
                                        <td>Wifi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-utensils"></i></td>
                                        <td>Restoran</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-square-parking"></i></td>
                                        <td>Parkir Gratis</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa-solid fa-bell-concierge"></i></td>
                                        <td>Layanan Kamar</td>
                                    </tr>
                                </table>
                            </div>
                        </li>
                        <li class="list-group-item">Harga Mulai: <b>Rp. 1.567.217</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url() ?>hotel/" class="card-link btn btn-primary">Booking Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center pb-2 pt-5">
            <a href="<?= base_url() ?>hotel/hotels" class="btn-brown px-5 py-3 text-white text-decoration-none rounded">Lihat Hotel Lain</a>
        </div>
    </div>
</div>
<!-- End Best Deals -->
<!-- Iklan 1 -->
<div class="iklan-1 bg-info container-fluid p-5">
    <div class="row">
        <div class="col-md-6 rounded d-flex justify-content-center bg-white align-items-center">
            <a class="navbar-brand d-inline" href="#"><img style="width: 100%;" class="" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
        </div>
        <div class="col-md-6 text-white text-end py-5">
            <div class="fs-3">
                <span class="iklan-1-safina bg-b-brown p-2 rounded">Safina</span> ADALAH PLATFORM UNTUK MELAKUKAN
            </div>
            <div class="fs-1">
                <b><span class="text-b-brown">PROSES PERJALANAN</span> HAJI-UMRAH-TOUR & TRAVEL</b>
            </div>
            <span class="fst-italic fs-3">DENGAN MUDAH DAN CEPAT</span>
        </div>
    </div>
</div>
<!-- End Iklan 1 -->
<!-- Layanan -->
<div class="bg-white p-5">
    <div class="text-center pb-5">
        <h1><span class="text-b-brown">Layanan</span> <span class="text-b-blue">Safina</span></h1>
    </div>
    <div class="row text-center">
        <div class="col-md-3 d-flex flex-column justify-content-center align-content-center">

            <div class=""><i class="fa-solid fa-sheet-plastic layanan-icon text-b-blue"></i></div>

            <div class="text-b-brown fs-4"><b>VISA UMRAH</b></div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-center align-content-center">

            <i class="fa-solid fa-hotel layanan-icon text-b-blue"></i>

            <div class="text-b-brown fs-4"><b>HOTEL</b></div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-center align-content-center">

            <i class="fa-solid fa-plane layanan-icon text-b-blue"></i>

            <div class="text-b-brown fs-4"><b>TIKET PESAWAT</b></div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-center align-content-center">

            <i class="fa-solid fa-car layanan-icon text-b-blue"></i>

            <div class="text-b-brown fs-4"><b>TRANSPORTASI</b></div>
        </div>
    </div>
</div>
<div class="kontak">
    <!-- <div>Ikuti Terus Berita Safina</div> -->
    <div>
        <form action="">

        </form>
    </div>
</div>
<!-- End Layanan -->