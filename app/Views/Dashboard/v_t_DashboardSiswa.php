<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    <!-- Include your CSS and JavaScript files here -->
</head>

<body>
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= base_url('fotosiswa/' . $siswa['foto_siswa']) ?>" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $siswa['nama_siswa']; ?></h5>
                        <p class="text-muted mb-1"><?= $siswa['nisn']; ?></p>
                        <p class="text-muted mb-4"><?= $siswa['kelas']; ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= base_url('Siswa/View/' . $siswa['id_siswa']) ?>" class="btn btn-primary">Profil
                                Siswa <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Pelajaran Siswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Waktu Mulai</th>
                                    <th scope="col">Waktu Selesai</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Nama Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_siswa as $jadwal) { ?>
                                <tr>
                                    <td><?= $jadwal['hari']; ?></td>
                                    <td><?= $jadwal['waktu_mulai']; ?></td>
                                    <td><?= $jadwal['waktu_selesai']; ?></td>
                                    <td><?= $jadwal['kelas']; ?></td>
                                    <td><?= $jadwal['mapel']; ?></td>
                                    <td><?= $jadwal['nama_guru']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nilai Siswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Tahun Akademik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($nilai_siswa as $nilai) { ?>
                                <tr>
                                    <td><?= $nilai['mapel']; ?></td>
                                    <td><?= $nilai['nilai_angka']; ?></td>
                                    <td><?= $nilai['semester']; ?></td>
                                    <td><?= $nilai['tahun_akademik']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>