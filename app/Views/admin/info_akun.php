<?= $this->extend('layout/index_admin'); ?>

<?= $this->section('content'); ?>

<!-- <h1>Artikel</h1> -->
<div class="card border-0 my-3">
    Halo Admin,<b style="font-size: 32px;"> Info Akun </b>
</div>

<div class="bg-primary">
</div>

<div class="container-fluid">
    <div class="container row align-items justify-content-center">

        <div class="card mb-3 border-0" style="width: 242px;">
            <img src="/assets/profile.png" alt="" style=" text-align: center;">
            <div class="card my-4 py-3 border-0 abu-bg">
                <div class="container-fluid my-2">
                    <b>Username</b> <?= session()->get('username') ?>
                </div>
                <div class="container-fluid my-2">
                    <b>Password</b> <?= session()->get('password') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>