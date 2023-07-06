<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="layout1css">
    <div class="layoutgambar" style="background-image: url('<?= base_url('img/bg_kijang2.jpeg') ?>')"></div>
    <div class="layout2css">
        <p>
            <span class="text-css2 ">MobilMantap.com</span><br>
            <span class="text-css3 ">adalah platform online yang menyediakan beragam pilihan mobil baru dan bekas dengan
                kualitas terjamin.
                MobilMantap.com juga menawarkan fitur lengkap seperti deskripsi detail, foto berkualitas tinggi, harga
                kompetitif,
                dan informasi kontak yang jelas untuk setiap kendaraan. Dengan keamanan transaksi yang terjamin,
                MobilMantap.com menjadi tujuan terpercaya bagi para calon pembeli mobil.</span>
        </p>
        <a href="/komik/" class="btn btn-success">Klik Selengkapnya</a>

    </div>
</div>


<div class="container1">
    <div class="box1 huge1">
        <div class="content1">
            <div class="text1">
                <p>
                    <span class="text-css2 ">Koleksi Mobil Lengkap</span><br>
                    <span class="text-css3 ">Situs web ini menawarkan koleksi mobil yang luas, mencakup berbagai merek
                        dan model terkemuka.
                        Pengguna dapat menemukan mobil baru dan bekas dengan berbagai pilihan, termasuk mobil keluarga,
                        mobil sport, SUV, sedan, dan lainnya.</span>
                </p>
            </div>
            <div class="image1">
                <img src="<?= base_url('img/bg2_kijang.jpeg') ?>" alt="Gambar1">
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="box2 huge2">
            <div class="content2">
                <div class="text2">
                    <p>
                        <span class="text-css2 ">Deskripsi dan Informasi Detai</span><br>
                        <span class="text-css3 ">Setiap mobil yang terdaftar di Mobilmantap.com dilengkapi dengan
                            deskripsi dan informasi
                            detail yang lengkap. Ini termasuk spesifikasi teknis, performa mesin, fitur interior dan
                            eksterior, riwayat perawatan, dan sejarah pemakaian jika tersedia. Informasi ini membantu
                            pengguna untuk memperoleh pemahaman yang mendalam tentang mobil yang mereka minati</span>
                    </p>
                </div>
                <div class="image2">
                    <img src="<?= base_url('img/bg_avanza.jpeg') ?>" alt="Gambar2">
                </div>
            </div>
        </div>

        <section>
            <div class="footerbg" style="background-image: url('<?= base_url('img/bg4_avanza.jpeg') ?>')">
                <div class="shadow">
                    <div class="desk">
                        <h1>MobilMantap.com</h1>
                    </div>
                    <div class="deskripsi">
                        <div class="desk1">
                            <h1>Foto Berkualitas</h1>
                            <p>
                                Mobilmantap.com menyediakan foto-foto mobil yang berkualitas
                                tinggi. Gambar-gambar ini memberikan tampilan visual yang jelas
                                dan detail tentang eksterior dan interior mobil, membantu
                                pengguna dalam proses pemilihan.
                            </p>
                        </div>
                        <div class="desk2">
                            <h1>Harga terjangkau</h1>
                            <p>
                                Situs web ini menawarkan harga mobil yang kompetitif.
                                Mobilmantap.com berusaha memberikan nilai yang baik kepada
                                pengguna dengan menyediakan mobil dengan harga yang sesuai
                                dengan kondisi dan kualitasnya.
                            </p>
                        </div>
                        <div class="desk3">
                            <h1>Harga terjangkau</h1>
                            <p>
                                Setiap iklan mobil di Mobilmantap.com dilengkapi dengan
                                informasi kontak yang jelas, seperti nomor telepon atau email
                                penjual.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



<?= $this->endSection(); ?>