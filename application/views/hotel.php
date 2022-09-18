<div class="mt-88 px-5 py-4">
    <div class="text-center">
        <h3>Hotel</h3>
    </div>
    <form class="px-5 py-3" action="" method="post">
        <div class="row">
            <div class="col-md-2">
                <label for="namahotel" class="form-label">Nama Hotel</label>
                <input type="text" class="form-control" id="namahotel" placeholder="">
            </div>
            <div class="col-md-2">
                <label for="daerah" class="form-label">Pilih Daerah</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Daerah</option>
                    <option value="1">Abdullah Khayyat Street</option>
                    <option value="2">Abraj Al Bait</option>
                    <option value="3">Ajyad Al Masafi</option>
                    <option value="3">Ajyad Royad</option>
                    <option value="3">Al Ghaza</option>
                </select>
            </div>
            <div class="col-md-3 d-flex">
                <div class="me-md-1">
                    <label for="namahotel" class="form-label">Check In</label>
                    <input type="date" class="form-control" id="namahotel" placeholder="">
                </div>
                <div class="ms-md-1">
                    <label for="namahotel" class="form-label">Check Out</label>
                    <input type="date" class="form-control" id="namahotel" placeholder="">
                </div>
            </div>
            <div class="col-md-2">
                <label for="tipe" class="form-label">Tipe Ruangan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Double</option>
                    <option value="1">Triplet</option>
                    <option value="2">Quadruple</option>
                    <option value="3">Quintuple</option>
                    <option value="4">Sextuple</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="pemandangan" class="form-label">Pemandangan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tanpa Pemandangan</option>
                    <option value="1">Kaaba</option>
                    <option value="2">Haram</option>
                    <option value="3">Kota</option>
                    <option value="4">Rowdah</option>
                </select>
            </div>
            <div class="col-md-1">
                <button style="margin-top: 30px;" type="submit" class="form-control btn-brown text-white" id="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            </div>
        </div>
    </form>
    <div class="hotel row px-5 py-3">
        <div class="col-md-4">
            <img class="hotel-img rounded" src="<?= base_url() ?>asset/img/hilton.jpeg" alt="">
        </div>
        <div class="col-md-8">
            <div class="">
                <h1>Hilton Makkah Conventional Hotel</h1>
                <span><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i></span>
            </div>
            <div>
                <p>Dengan bermalam di Hilton Makkah Conventional Hotel, Al Aziziyah, Mekah, Anda hanya beberapa menit dari Masjid Faqih dan dekat dengan Al Jamarat. Hotel bintang 4 ini jaraknya dekat dengan Mina dan Mall Makkah.</p>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <b>Fasilitas:</b>
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
                <div class="col-md-6">
                    <h6><b>Jarak:</b></h6>
                    <div>
                        <table>
                            <tr>
                                <td><img class="icon-ma makkah mb-1" src="<?= base_url() ?>asset/img/makkah.png" alt=""> <b>Makkah</b></td>
                                <td>:</td>
                                <td>100 meter</td>
                            </tr>
                            <tr>
                                <td><img class="icon-ma madinah mb-2" src="<?= base_url() ?>asset/img/madinah.png" alt=""> <b>Madinah</b></td>
                                <td>:</td>
                                <td>200 meter</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="fs-5 mb-2">
                Harga Mulai: <b>Rp. 1.567.217</b>
            </div>
            <div>
                <button class="btn-brown border-0 rounded text-white px-3 py-2 fs-5" data-bs-toggle="modal" data-bs-target="#booking">Booking Sekarang!</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="booking" tabindex="-1" aria-labelledby="bookingLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bookingLabel">Booking - Hilton Makkah Conventional Hotel</h5>
                            <a class="m-auto" href="#"><img class="nav-logo" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
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
                                    <label for="nama" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Laki - laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="bisnis" class="form-label">Tempat, Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="telpon" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="telpon" placeholder="">
                                </div>
                                <div class="mb-3 border-bottom">
                                    <h5>Kamar</h5>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Kapasitas</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>2 Orang</option>
                                        <option value="1">3 Orang</option>
                                        <option value="2">4 Orang</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Tipe</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Standard Room</option>
                                        <option value="1">Superior Room</option>
                                        <option value="2">Deluxed Room</option>
                                        <option value="3">Twin Room</option>
                                        <option value="4">Single Room</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="bisnis" class="form-label">Check In</label>
                                            <input type="date" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bisnis" class="form-label">Check Out</label>
                                            <input type="date" class="form-control" id="bisnis" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="btnBooking" data-text="Hilton Makkah Conventional Hotel" class="rounded border-0 py-2 px-2 btn-brown text-white">Booking Hotel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="location py-2">
                <div>
                    <h4 class="bg-b-blue text-white text-center py-2 rounded">Lihat Lokasi</h4>
                </div>
                <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.166459815805!2d39.81787051483911!3d21.42270118578636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c204b45652ae21%3A0x2b222b823c26269a!2sHilton%20Makkah%20Convention%20Hotel!5e0!3m2!1sen!2sid!4v1662977121758!5m2!1sen!2sid" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>