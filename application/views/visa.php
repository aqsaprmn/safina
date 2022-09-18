<div class="mt-88 px-3 py-4">
    <div class="px-2 mb-3">
        <h3><span class="text-b-brown">Pembuatan</span> <span class="text-b-blue">Visa Umroh</span></h3>
    </div>
    <div class="px-2">
        <form class="" action="<?= base_url() ?>visa/submit/" method="post">
            <div class="p-3 rounded shadow-lg mb-3">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Data Pribadi</h5>
                        <hr>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" value="" name="nama" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="sex" class="form-select" aria-label="Default select example">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-3 col-form-label">Tempat/ Tgl Lahir</label>
                            <div class="col-sm-9">
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
                        <div class="mb-3 row">
                            <label for="noiden" class="col-sm-3 col-form-label">No Identitas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="noiden" value="" name="noiden">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" autocomplete="off" id="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hp" class="col-sm-3 col-form-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="hp" autocomplete="off" id="hp">
                            </div>
                        </div>
                        <div class="row">
                            <label for="grup" class="col-sm-3 col-form-label">Mengajukan Grup ?</label>
                            <div class="col-sm-9">
                                <select name="grup" class="form-select" aria-label="Default select example">
                                    <option selected value="T">Tidak</option>
                                    <option value="Y">Ya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Informasi Passport</h5>
                        <hr>
                        <div class="mb-3 row">
                            <label for="textemail" class="col-sm-3 col-form-label">No Passport</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nopass" value="" name="nopass" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="negara" class="col-sm-3 col-form-label">Negara</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="negara" autocomplete="off" id="negara" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pi" class="col-sm-3 col-form-label">Tempat Dikeluarkan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="pi" autocomplete="off" id="pi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="di" class="col-sm-3 col-form-label">Tgl Cetak</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="di" id="di">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="de" class="col-sm-3 col-form-label">Tgl Masa Berlaku</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="de" name="de">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="filepass" class="col-sm-3 col-form-label">Unggah Passport</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="filepass" id="filepass">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <button class="btn-brown text-white rounded p-2 border-0">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="bookingtiket" tabindex="-1" aria-labelledby="bookingtiketLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingtiketLabel">Booking Tiket Pesawat - Air Asia</h5>
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
                        <button type="button" id="btnBooking" class="rounded border-0 py-2 px-2 btn-brown text-white">Booking Tiket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </form>


</div>
</div>