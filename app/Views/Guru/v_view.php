<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-eye"></i> <?= $judul ?></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>NiP :</strong></td>
                        <td><?= $guru['nip']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Guru :</strong></td>
                        <td><?= $guru['nama_guru']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Lahir :</strong></td>
                        <td><?= $guru['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jenis Kelamin :</strong></td>
                        <td><?= $guru['jenis_kel']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Telepon :</strong></td>
                        <td><?= $guru['telp_guru']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pendidikan :</strong></td>
                        <td><?= $guru['pendidikan']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jurusan :</strong></td>
                        <td><?= $guru['jurusan']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Password :</strong></td>
                        <td><?= $guru['password']; ?></td>
                    </tr>
                </tbody>
            </table>

            <?php if (!empty($guru['foto_guru']) && file_exists('fotoguru/' . $guru['foto_guru'])) { ?>
            <strong>Foto guru:</strong><br>
            <img src="<?= base_url('fotoguru/' . $guru['foto_guru']) ?>" style="width: 100%; height: auto;"
                alt="foto guru">
            <?php } ?>

            <div style="text-align: right;">
                <a href="<?= base_url('Guru') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>