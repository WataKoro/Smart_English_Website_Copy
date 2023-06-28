<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>

<!-- <h1>Artikel</h1> -->
<div class="card border-0 my-3">
    Halo Admin,<b style="font-size: 32px;"> Smart English Statistik </b>
</div>

<!-- <div class="card border-info"> -->
<!-- <div class="border border-top-0 border-info p-0 m-0" style="  margin-left: -20px; margin: 0px; padding: 0px;"> -->
<div>
    <table class="table table-striped seltabel  ">
        <thead class="warnabar">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Artikel</th>
                <th scope="col">Jumlah Tayangan</th>
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

                    <!-- jumlah tayang -->
                    <td><?= $a['jml_tayang']; ?> tayangan</td>

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
</div>

<!-- grafik line chart -->
<div class="container-fluid my-5 py-2">
    <div class="container row align-items justify-content-center">
        <div style="width: 700px;">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>


<script type="text/javascript">
    <?php
    $month[] = "";
    $amount[] = "";
    foreach ($article as $data) {
        $month[] = $data['judul_artikel'];
        $amount[] = $data['jml_tayang'];
    }
    ?>

    var xValues = <?php echo json_encode($month) ?>;
    var yValues = <?php echo json_encode($amount) ?>;
    var barColors = 'rgba(54, 162, 235, 0.2)';

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Statistik Jumlah Tayangan Artikel"
            }
        }
    });
</script>

<?= $this->endSection(); ?>