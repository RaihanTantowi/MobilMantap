<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="detail">
                <h1>Detail Mobil</h1>
                <div class="card" style="width: 50%">
                    <img src="/img/<?= $komik['sampul']; ?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title"><?= $komik['judul']; ?></h5>
                        <p class="card-text">
                            <b>Type : <?= $komik['penulis']; ?></b>
                        </p>
                        <p class="card-text">
                            <b>Harga : <?= $komik['penerbit']; ?></b>
                        </p>
                        </p>
                        <p class="card-text">
                            <b>Status: Ready</b>
                        </p>
                        <a href="#" class="btn btn-success">Get contact</a>
                        <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('apakah anda yakin');">Delete</button>
                        </form>


                        <br><br>
                        <a href="/komik">Kembali ke daftar Mobil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>