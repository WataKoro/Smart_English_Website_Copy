<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>

<!-- <h1>Edit Artikel</h1> -->

<!-- <div class="container py-5"> -->
<div class="card border-0 my-3">
    Halo Admin,<b style="font-size: 32px;">Detail Data Registrasi</b>
</div>

<button id="download_data" class="btn mb-3" style="color: white; background-color: #06B6D4">Download PDF</button>

<div class="row">

    <!-- <a class="btn btn-info mb-3" style="color: white; background-color: #06B6D4" id="download_data">Download PDF</a> -->


    <div class="container-fluid my-5" id="yubisa">
        <div class="container row align-items justify-content-center">

            <div class="col-8">


                <table class="table" id="data_regis">
                    <tbody>
                        <tr>
                            <th scope="row">ID Siswa</th>
                            <td><?php echo $detail_regis['id']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $detail_regis['email']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td><?php echo $detail_regis['fname']; ?>, <?php echo $detail_regis['lname']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenjang Pendidikan</th>
                            <td><?php echo $detail_regis['eduStage']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tingkatan</th>
                            <td><?php echo $detail_regis['eduGrade']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Sekolah</th>
                            <td><?php echo $detail_regis['school']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tempat dan Tanggal Lahir</th>
                            <td><?php echo $detail_regis['birthPlace']; ?>, <?php echo $detail_regis['birthDate']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pekerjaan Orang Tua</th>
                            <td><?php echo $detail_regis['parentJob']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Domisili</th>
                            <td><?php echo $detail_regis['Location']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Provinsi</th>
                            <td><?php echo $detail_regis['province']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kota</th>
                            <td><?php echo $detail_regis['city']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat Tinggal</th>
                            <td><?php echo $detail_regis['address']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Telepon</th>
                            <td><?php echo $detail_regis['phone']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Program</th>
                            <td><?php echo $detail_regis['programName']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jadwal</th>
                            <td><?php echo $detail_regis['programSchedule']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/js/admin/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('download_data').onclick = function() {
        var element = document.getElementById('yubisa');

        var opt = {
            margin: 0.5,
            filename: 'data_registrasi.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
        html2pdf(element, opt);
    };
</script>

<?= $this->endSection(); ?>