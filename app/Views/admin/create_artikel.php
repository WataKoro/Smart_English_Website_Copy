<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>


<!-- <div class="container py-5"> -->
<div class="container row">
    <div class="card border-0 my-3">
        Halo Admin,<b style="font-size: 32px;">Tambah Artikel</b>
    </div>
    <div class="card border-0 my-3">

        <form action="/admin_artikel/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b style="font-size: 20px;"> Judul Artikel</b></label>
                <input type="text" class="form-control border-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_artikel" placeholder="Judul Artikel (maks 255 karakter)" required>
            </div>

            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Judul_artikel</span>
                <input type="text" class="form-control" placeholder="judul_artikel" aria-label="judul_artikel" aria-describedby="basic-addon1" name="judul_artikel" required>
            </div> -->


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b style="font-size: 20px;">Media</b></label>
                <div class="container-fluid align-items mx-0" style="width: auto;">
                    <div class="container-fluid text-center m-0 align-items py-0">
                        <div class="row align-items justify-content-center pl-5">

                            <div class="card border-0 m-4" style="width: 20rem;">
                                <h5 class="card-title">Upload</h5>
                                <div class="card rounded-3 border-dark dashed pt-4  align-items-center justify-content-center" style="text-align: center;">
                                    <div class="container">
                                        <img src="/assets/vector.png" alt="" class="img-thumbnail img-preview border-0" style="width: 54px; text-align: center;">
                                        <input type="file" class="custom-file-input" id="foto_artikel" name="foto_artikel" onchange="preview()" required>
                                        <label for="foto_artikel" class="custom-file-label" style="color: white;"></label>
                                    </div>
                                </div>
                            </div>
                            <!-- link yt -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="foto_artikel" class="col-sm-2 col-form-label">Foto Artikel</label>
                <div class="col-sm-2">
                    <img src="/assets/vector.png" alt="" class="img-thumbnail img-preview">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="custom-file ">
                    <input type="file" class="custom-file-input bg-primary" id="foto_artikel" name="foto_artikel" onchange="preview()">
                    <label for="foto_artikel" class="custom-file-label" style="color: white;"></label>
                </div>
            </div> -->

            <!-- <div class="input-group pb-3">
                <span class="input-group-text">Isi Artikel</span>
                <textarea class="form-control" aria-label="isi_artikel" name="isi_artikel" required></textarea>
            </div> -->

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b style="font-size: 20px;"> Teks</b></label>
                <textarea class="form-control border-1" rows="3" name="isi_artikel" placeholder="Teks (maks 1000 karakter)" required></textarea>
            </div>


            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipe_artikel" id="inlineRadio1" value="Draft" required>
                    <label class="form-check-label" for="inlineRadio1">
                        Draft</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipe_artikel" id="inlineRadio2" value="Publish" required>
                    <label class="form-check-label" for="inlineRadio2">
                        Publish</label>
                </div>
            </div>


            <button type="submit" class="btn btn-primary my-3" style="color: white; background-color: #06B6D4">Save</button>
        </form>
    </div>
</div>
<!-- </div> -->

<?= $this->endSection(); ?>