<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>

<!-- <h1>Artikel</h1> -->
<div class="card border-0 my-3">
    Halo Admin,<b style="font-size: 32px;"> Dashboard CMS </b>
</div>


<a href="/admin_artikel/create" class="btn btn-info mb-3" style="color: white; background-color: #06B6D4">+ Tambah Artikel</a>

<!-- <div class="card border-info"> -->
<!-- <div class="border border-top-0 border-info p-0 m-0" style="  margin-left: -20px; margin: 0px; padding: 0px;"> -->

<table class="table table-striped seltabel  ">
    <thead class="warnabar">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Artikel</th>
            <th scope="col">Tanggal Perubahan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="">
        <?php $i = 1; ?>
        <?php foreach ($article as $a) : ?>
            <tr style="line-height: auto;">
                <!-- no artikel -->
                <th scope="row"><?= $i++; ?></th>

                <!-- judul artikel -->
                <td><?= $a['judul_artikel']; ?></td>

                <!-- tanggal perubahan -->
                <td><?= $a['last_update']; ?></td>

                <!-- tanggal perubahan -->
                <td><?= $a['status']; ?></td>

                <!-- aksi artikel -->
                <td>
                    <a href="/admin_artikel/edit/<?= $a['id_artikel']; ?>" class="btn btn-outline-light" style="color: #06B6D4;">
                        <img src="/assets/edit.png" alt=""><b>
                            Edit</b></a>

                    <a href="/admin_artikel/delete/<?= $a['id_artikel']; ?>" class="btn btn-outline-light" style="color: #EC2626;" onclick="return confirm('Apakah Anda Yakin Menghapus Dokumen?')">
                        <img src="/assets/hapus.png" alt=""><b>
                            Hapus</b></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- </div> -->

<!-- </div> -->

<?= $this->endSection(); ?>