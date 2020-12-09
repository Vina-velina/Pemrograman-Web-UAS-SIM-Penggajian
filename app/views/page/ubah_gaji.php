    <div class="container mt-3">
        <div class="kotak">
            <?php
            Flasher::flash()
            ?>
        </div>
        <div class="jumbotron">
            <h1 class="display-5">Ubah Data Gaji <span
                    class="text-primary"><?= ucfirst($data['detail_gaji'][0]['nama_user']) ?></span></h1>
            <hr class="my-4">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="hadir">Pembayaran Untuk Bulan</label>
                        <input required type="date" class="form-control" id="tanggal" min="<?= date('Y-m-d') ?>"
                            value="<?= $data['detail_gaji'][0]['nama_bulan'] ?>" name=" tanggal" max="31" min="0">
                    </div>
                    <div class="form-group">
                        <label for="ijin">Jumlah Ijin Perbulan</label>
                        <input required type="number" class="form-control" id="ijin" name="ijin" max="31" min="0"
                            value="<?= $data['detail_gaji'][0]['jumlah_ijin'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" value="SUBMIT" name="submit">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>