<div class="mt-88 px-5 py-4">
    <div class="px-5">
        <h3><span class="text-b-brown">Paket</span>
            <spa class="text-b-blue">Umroh</spa>
        </h3>
    </div>
    <form class="px-5 py-3" action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for="daerah" class="form-label text-b-blue"><b>Periode</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Periode</option>
                    <option value="1">Agustus / Muharam</option>
                    <option value="2">September / Safar</option>
                    <option value="3">Oktober / Rabi al Awal</option>
                    <option value="4">November / Jumada al-Ulla</option>
                    <option value="5">Jumada Al-Akhirah</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="tipe" class="form-label text-b-blue"><b>Tipe Paket</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Tipe Paket</option>
                    <option value="1">Ekonomi</option>
                    <option value="2">Premium</option>
                    <option value="3">Budget</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="jamaah" class="form-label text-b-blue"><b>Jamaah</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Total Jamaah</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="col-md-3">
                <button style="margin-top: 30px;" type="submit" class="form-control btn-brown text-white" id="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            </div>
        </div>
    </form>
    <div class="populer mb-5">
        <div class="px-4 mb-3">
            <h3 class="px-4">Paket Umroh Populer</h3>
        </div>
        <div class="row px-3">
            <div class="col-md-6 px-md-5 d-flex justify-content-center">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="<?= base_url() ?>asset/img/paketmekah1.jpeg" class="card-img-top mb-3" alt="...">
                        <h4 class="card-title bg-b-blue text-white text-center rounded p-1">Keberangkatan Flexibel</h4>
                        <h5 class="card-text lh-1">Oktober | 14 Malam | Termasuk Penerbangan</h5>
                        <p class="text-secondary mb-0 lh-1 fst-italic">Premium</p>
                        <small class="text-b-brown">Jeddah Airport <i class="fa-solid fa-circle-chevron-right"></i> Makkah <i class="fa-solid fa-circle-chevron-right"></i> Madinah <i class="fa-solid fa-circle-chevron-right"></i> Madinah Airport</small>
                        <hr>
                        <p class="text-decoration-underline">Termasuk: </p>
                        <div class="d-flex justify-content-between">
                            <span class="me-3">
                                <i class="fa-solid fa-plane fs-4"></i> Penerbangan
                            </span>
                            <span class="me-3">
                                <i class="fa-brands fa-cc-visa fs-4"></i> Visa
                            </span>
                            <span class="me-3">
                                <i class="fa-solid fa-car fs-4"></i> Transportasi
                            </span>
                            <span class="me-3">
                                <i class="fa-solid fa-hotel fs-4"></i> Hotel
                            </span>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-decoration-underline">Jarak: </p>
                                <div>
                                    <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 100 meter</span>
                                </div>
                                <div>
                                    <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 200 meter</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="text-decoration-underline">Total Peziarah: </p>
                                <div>
                                    <span><i class="fa-solid fa-user"></i> 40 Orang </span>
                                </div>
                            </div>
                            <hr>
                            <div class="">
                                <button class="btn-brown form-control rounded border-0 text-white p-2" data-bs-toggle="modal" data-bs-target="#bookingtiket">Booking Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-b-brown text-white text-center">
                            <span>Rupiah <h3>2.500.000</h3></span>
                            <p class="fst-italic">Per Peziarah</p>
                            <p>Peziarah: <span class="bg-white text-black p-2 rounded">2</span> - <b>5.000.000</b> </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 px-md-5 d-flex justify-content-center">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <img src="<?= base_url() ?>asset/img/paketmekah2.jpeg" class="card-img-top mb-3" alt="...">
                        <h4 class="card-title bg-b-blue text-white text-center rounded p-1">Keberangkatan Flexibel</h4>
                        <h5 class="card-text lh-1">September | 10 Malam | Tanpa Penerbangan</h5>
                        <p class="text-secondary mb-0 lh-1 fst-italic">Ekonomi</p>
                        <small class="text-b-brown">Jeddah Airport <i class="fa-solid fa-circle-chevron-right"></i> Makkah <i class="fa-solid fa-circle-chevron-right"></i> Madinah <i class="fa-solid fa-circle-chevron-right"></i> Madinah Airport</small>
                        <hr>
                        <p class="text-decoration-underline">Termasuk: </p>
                        <div class="d-flex justify-content-between">
                            <span class="me-3">
                                <i class="fa-brands fa-cc-visa fs-4"></i> Visa
                            </span>
                            <span class="me-3">
                                <i class="fa-solid fa-car fs-4"></i> Transportasi
                            </span>
                            <span class="me-3">
                                <i class="fa-solid fa-hotel fs-4"></i> Hotel
                            </span>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-decoration-underline">Jarak: </p>
                                <div>
                                    <span><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah:</b> 400 meter</span>
                                </div>
                                <div>
                                    <span><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah:</b> 800 meter</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="text-decoration-underline">Total Peziarah: </p>
                                <div>
                                    <span><i class="fa-solid fa-user"></i> 40 Orang </span>
                                </div>
                            </div>
                            <hr>
                            <div class="">
                                <button class="btn-brown form-control rounded border-0 text-white p-2" data-bs-toggle="modal" data-bs-target="#bookingtiket">Booking Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-b-brown text-white text-center">
                            <span>Rupiah <h3>2.500.000</h3></span>
                            <p class="fst-italic">Per Peziarah</p>
                            <p>Peziarah: <span class="bg-white text-black p-2 rounded">2</span> - <b>5.000.000</b> </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="bookingtiket" tabindex="-1" aria-labelledby="bookingtiketLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingtiketLabel">Booking Paket Umroh - Premium</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body overflow-auto" style="height: 600px;">
                            <div class="mb-3 border-bottom">
                                <h5>Data Pribadi</h5>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="no" class="form-label">No Identitas</label>
                                <input type="text" class="form-control" id="no" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Laki - laki</option>
                                    <option value="1">Perempuan</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                    <label for="bisnis" class="form-label">Tempat, Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                    </div>
                                </div> -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="telpon" class="form-label">Nomor Telpon</label>
                                <input type="text" class="form-control" id="telpon" placeholder="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="btnBooking" data-text="Paket Umroh" class="rounded border-0 py-2 px-2 btn-brown text-white">Booking Paket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="populer">
        <div class="px-4 mb-3">
            <h3 class="px-4">Paket Umroh Dasar</h3>
        </div>
        <div class="px-4 mx-2">
            <div class="mx-3 rounded shadow-lg ">
                <div class="row p-4">
                    <div class=" col-md-3 d-flex justify-content-center">
                        <button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/1.jpeg" alt="">
                        </button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/2.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/3.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/4.jpeg" alt=""></button>
                    </div>
                </div>
                <div class="row p-4">
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/5.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/6.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/7.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/8.jpeg" alt=""></button>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/5.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/12.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/10.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-3 d-flex justify-content-center"><button class="border rounded p-1 bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/11.jpeg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>