<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>

<!-- <h1>Artikel</h1> -->
<div class="card border-0 my-3">
    Halo Admin,<b style="font-size: 32px;"> Data Registrasi </b>
</div>

<!-- <div class="card border-info"> -->
<!-- <div class="border border-top-0 border-info p-0 m-0" style="  margin-left: -20px; margin: 0px; padding: 0px;"> -->
<!-- nama dpn + blkg, email, nama sekolah, program -->
<div>
    <table class="table table-striped seltabel  ">
        <thead class="warnabar">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Sekolah</th>
                <th scope="col">Program</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="">
            <?php $i = 1; ?>
            <?php foreach ($regis as $r) : ?>
                <tr style="line-height: auto;">
                    <!-- no registrasi -->
                    <th scope="row"><?= $i++; ?></th>

                    <!-- nama lengkap -->
                    <td><?= $r['fname']; ?> <?= $r['lname']; ?></td>

                    <!-- email -->
                    <td><?= $r['email']; ?></td>

                    <!-- sekolah -->
                    <td><?= $r['school']; ?></td>

                    <!-- program -->
                    <td><?= $r['programName']; ?></td>

                    <!-- aksi registrasi -->
                    <td>
                        <a href="/admin_registrasi/detail/<?= $r['id']; ?>" class="btn btn-outline-light" style="color: #06B6D4;">
                            <img src="/assets/detail.png" alt=""><b>
                                Detail</b></a>

                        <!-- <a href="/registrasi/unduh/<?= $r['id']; ?>" class="btn btn-outline-light text-success">
                            <img src="/assets/unduh.png" alt=""><b>
                                Unduh</b></a> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>