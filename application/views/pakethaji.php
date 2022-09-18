<div class="mt-88 px-5 py-4">
    <div class="px-5">
        <h3><span class="text-b-brown">Paket</span>
            <spa class="text-b-blue">Haji</spa>
        </h3>
    </div>
    <form class="px-5 py-3" action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for="daerah" class="form-label text-b-blue"><b>Jumlah Hari</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Hari</option>
                    <option value="1">16 Hari</option>
                    <option value="2">22 Hari</option>
                    <option value="3">27 Hari</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="tipe" class="form-label text-b-blue"><b>Tipe Kamar Hotel</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Tipe Kamar</option>
                    <option value="1">Quad</option>
                    <option value="2">Triple</option>
                    <option value="3">Double</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="pemandangan" class="form-label text-b-blue"><b>Jamaah</b></label>
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
    <!-- Modal -->
    <div class="modal fade" id="bookingtiket" tabindex="-1" aria-labelledby="bookingtiketLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingtiketLabel">Booking Paket Haji</h5>
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
                        <button type="button" id="btnBooking" data-text="Paket Haji" class="rounded border-0 py-2 px-2 btn-brown text-white">Booking Paket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="populer mb-4">
        <div class="px-4 mb-3">
            <h3 class="px-4">Haji Furodah</h3>
        </div>
        <div class="px-4 mx-2">
            <div class="mx-3 rounded shadow-lg ">
                <div class="row p-4">
                    <div class=" col-md-4 d-flex justify-content-center">
                        <button class="border rounded p-1  bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/haji1.jpeg" alt="">
                        </button>
                    </div>
                    <div class=" col-md-4 d-flex justify-content-center">
                        <button class="border rounded p-1  bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/haji2.jpeg" alt="">
                        </button>
                    </div>
                    <div class=" col-md-4 d-flex justify-content-center"><button class="border rounded p-1  bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/haji3.jpeg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="populer">
        <div class="px-4 mb-3">
            <h3 class="px-4">Haji Kusus</h3>
        </div>
        <div class="px-4 mx-2">
            <div class="mx-3 rounded shadow-lg ">
                <div class="row p-4">
                    <div class=" col-md-6 d-flex justify-content-center"><button class="border rounded p-1  bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/haji4.jpeg" alt=""></button>
                    </div>
                    <div class=" col-md-6 d-flex justify-content-center"><button class="border rounded p-1  bg-transparent p-0" data-bs-toggle="modal" data-bs-target="#bookingtiket">
                            <img class="w-100" src="<?= base_url() ?>asset/img/haji5.jpeg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>