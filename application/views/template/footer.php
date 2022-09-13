<!-- Email -->
<div class="p-5 bg-b-blue">
    <div class="text-center mb-5">
        <h2><span class="text-b-brown">JANGAN PERNAH LEWATKAN</span> <span class="text-white">INFO TENTANG KAMI!</span></h2>
    </div>
    <div class="input-group mb-3 w-50 m-auto">
        <input type="text" class="form-control p-3 fs-5" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
        <button class="btn btn-primary fs-5" type="button" id="button-addon2">Berlangganan Sekarang!</button>
    </div>

</div>
<!-- End Email -->
<!-- Footer -->
<footer class="bg-grey">
    <div class="row p-5">
        <div class="col-md-6">
            <a class="navbar-brand d-inline" href="#"><img style="width: 300px;" class="mb-3" src="<?= base_url() ?>asset/img/logo.png" alt=""></a>
            <div class="pe-5 me-5">Safina adalah sebuah perusahaan yang bergerak dibidang pelayanan jasa untuk proses perjalanan Haji-Umroh-Tour & Travel. Safina didirikan pada tahun 2022 yang dimana perusahaan ini berfokus pada beberapa layanan diantaranya adalah pembuatan Visa Umrah, Pembelian Tiket Pesawat, Menyewa Kamar Hotel dan Transportasi.</div>
        </div>
        <div class="col-md-4">
            <div class="px-2 pb-2">
                <h3><b>Kontak Kami</b></h3>
            </div>
            <div>
                <table>
                    <tr>
                        <td class="px-2 text-center"><i class="fa-brands fa-whatsapp fs-4"></i></td>
                        <td><b>+62812-1212-1212</b></td>
                    </tr>
                    <tr>
                        <td class="px-2 text-center"><i class="fa-solid fa-envelope fs-4"></i></td>
                        <td><b>safina@gmail.com</b></td>
                    </tr>
                    <tr>
                        <td class="px-2 text-center"><i class="fa-solid fa-location-dot fs-4"></i></td>
                        <td><b>Menara MTH , Jl. Letjen MT. Haryono Kav. 23 , Jakarta. Tebet, Jakarta.</b></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-2">
            <div class="px-2 pb-2">
                <h3><b>Ikuti Kami</b></h3>
            </div>
            <div>
                <table>
                    <tr>
                        <td class="px-2"><a href=""><i class="fa-brands fa-facebook fs-1 text-primary"></i></a></td>
                        <td class="px-2"><a href=""><i class="fa-brands fa-twitter fs-1 text-info"></i></a></td>
                        <td class="px-2"><a href=""><i class="fa-brands fa-instagram fs-1 text-danger"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row text-white bg-info p-3 border-top border-2">
        <div class="text-center fs-5">Copyright 2022 © Safina. Seluruh Hak Cipta.</div>
    </div>

</footer>
<!-- End Footer -->

</div>


<!-- Bootstrap JS -->
<script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url() ?>asset/vendor/fontawesome/js/all.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if (isset($script)) {
    echo $script;
}
?>

</body>

</html>