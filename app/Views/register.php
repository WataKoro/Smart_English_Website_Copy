<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top py-1" id="nav">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-md-3 me-1" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Program</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 col-0"></div>
    </div>
</header>

<body class="bg-light">
    <div class="container-fluid mt-3">
        <div class="d-flex align-items-center float-end">
            <select class="form-select bg-light border-0" aria-label="Default select example">
                <option value="Indonesia" selected>Indonesia</option>
                <option value="English">English</option>
            </select>
        </div>
    </div>

    <section class="container-md bg-white col col-md-5" style="border-radius: 25px; margin-top: 80px;">
        <div class="row text-center" id="tab-nav">
            <a href="javascript:;" class="selected col-6 py-3" data-container="form-login">Login</a>
            <a href="javascript:;" class="col-6 py-3 text-dark" data-container="form-reg">Register</a>
        </div>

        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <div class="px-3 py-md-4 py-3" id="formContainer">
            <!-- login form -->
            <div class="my-5" id="form-login">
                <h2 class="text-center pt-3pb-md-3 pb-0 mb-4 mb-md-5">Welcome back, Student!</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form class="container col-md-6 col-12" action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="email" name="email" value="<?= set_value('email') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?= set_value('password') ?>">
                    </div>
                    <div class=" d-flex flex-wrap justify-content-between mb-3" style="font-size: 12px;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input p-0" id="remember">
                            <label class="form-check-label p-0" for="remember">Remember me?</label>
                        </div>
                        <div class="p-0">
                            <a href="forgot.html" class="text-decoration-none" style="color: #06B6D4;">Forgot your password?</a>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none;">Login</button>
                </form>
            </div>
            <!-- regist form -->
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <div class="my-5" id="form-reg">
                <h2 class="text-center pt-3pb-md-3 pb-0 mb-4 mb-md-5">Hello! Let's join us!</h2>
                <form class="container col-md-8 col-12" action="/register/save" method="post">
                    <section class="my-5">
                        <h3 class="text-center pb-4">Data Akun</h3>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-describedby="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Masukkan Kembali Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Kembali Password" name="Repassword" id="Repassword" required>
                        </div>
                    </section>

                    <section class="my-5">
                        <h3 class="text-center pb-4">Data Pribadi</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="fname" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" placeholder="Nama Depan" name="fname" id="fname" aria-describedby="First Name" required>
                                </div>
                                <div class="col-6">
                                    <label for="lname" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" placeholder="Nama Belakang" name="lname" id="lname" aria-describedby="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-8">
                                    <label for="eduStages" class="form-label">Jenjang Pendidikan</label>
                                    <select class="form-select" aria-label="Educational Select" name="eduStages" id="eduStages" required>
                                        <option value="no" selected>Belum Sekolah</option>
                                        <option value="elementary">SD</option>
                                        <option value="junior">SMP</option>
                                        <option value="senior">SMA</option>
                                        <option value="college">Kuliah</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="eduGrades" class="form-label">Tingkatan</label>
                                    <select class="form-select" aria-label="Grade" name="eduGrades" id="eduGrades" required>
                                        <option value="" disabled selected>Pilih salah satu tingkat berikut</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="school" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" placeholder="Nama Sekolah" name="school" id="school" required>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="birthPlace" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="birthPlace" id="birthPlace" aria-describedby="Birth Place" required>
                                </div>
                                <div class="col-6">
                                    <label for="birthDate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="birthDate" id="birthDate" aria-describedby="Birth Date" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="parentJob" class="form-label">Pekerjaan Orang Tua</label>
                            <select class="form-select" aria-label="Parent's Job" name="parentJob" id="parentJob" required>
                                <option value="Belum Bekerja" selected>Belum Bekerja</option>
                                <option value="PNS">PNS</option>
                                <option value="TNIPOLRI">TNI/Polri</option>
                                <option value="Swasta">Karyawan Swasta</option>
                                <option value="Petani">Petani</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="other">Other/Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="domisili" class="form-check-label mb-2">Domisili</label>
                            <div class="row">
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="Location" value="local" id="Location" required>
                                    <label class="form-check-label" for="domisiliLocal">
                                        Lokal
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="Location" value="international" id="Location">
                                    <label class="form-check-label" for="domisiliInternational">
                                        Internasional
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="province" class="form-label">Provinsi</label>
                            <select class="form-select" aria-label="province" name="province" id="province" required>
                                <option value="jakarta" selected>DKI Jakarta</option>
                                <option value="westJava">Jawa Barat</option>
                                <option value="centralJava">Jawa Tengah</option>
                                <option value="eastJava">Jawa Timur</option>
                                <option value="yogya">DI Yogyakarta</option>
                                <option value="aceh">Aceh</option>
                                <option value="northSumatera">Sumatera Utara</option>
                                <option value="westSumatera">Sumatera Barat</option>
                                <option value="southSumatera">Sumatera Selatan</option>
                                <option value="riau">Riau</option>
                                <option value="kepulauanRiau">Kepulauan Riau</option>
                                <option value="kepulauanBangkaBelitung">Kepulauan Bangka Belitung</option>
                                <option value="jambi">Jambi</option>
                                <option value="bengkulu">Bengkulu</option>
                                <option value="lampung">Lampung</option>
                                <option value="banten">Banten</option>
                                <option value="bali">Bali</option>
                                <option value="ntb">Nusa Tenggara Barat</option>
                                <option value="ntt">Nusa Tenggara Timur</option>
                                <option value="westKalimantan">Kalimantan Barat</option>
                                <option value="centralKalimantan">Kalimantan Tengah</option>
                                <option value="southKalimantan">Kalimantan Selatan</option>
                                <option value="eastKalimantan">Kalimantan Timur</option>
                                <option value="northKalimantan">Kalimantan Utara</option>
                                <option value="northSulawesi">Sulawesi Utara</option>
                                <option value="centralSulawesi">Sulawesi Tengah</option>
                                <option value="southSulawesi">Sulawesi Selatan</option>
                                <option value="southEastSulawesi">Sulawesi Tenggara</option>
                                <option value="westSulawesi">Sulawesi Barat</option>
                                <option value="gorontalo">Gorontalo</option>
                                <option value="maluku">Maluku</option>
                                <option value="northMaluku">Maluku Utara</option>
                                <option value="papua">Papua</option>
                                <option value="westPapua">Papua Barat</option>
                                <option value="Other">Other/Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="form-label">Kabupaten/Kota</label>
                            <select class="form-select" aria-label="City" name="city" id="city" required>
                                <option value="" disabled selected>Harap pilih provinsi terlebih dahulu</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label">Alamat Tinggal</label>
                            <input type="text" class="form-control" placeholder="Alamat Tinggal" name="address" id="address" required>
                        </div>
                        <label for="phone" class="form-label">Nomor Telepon</label>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="suffix">+62</span>
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="Nomor Telepon" name="phone" id="phone" required>
                        </div>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-center pt-5 my-5">Program Yang Akan Dipilih</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="program" class="form-label">Program</label>
                                    <select class="form-select" aria-label="program" name="program" id="program" required>
                                        <option value="English Only" selected>English Only</option>
                                        <option value="English and Mathematics">English and Mathematics</option>
                                        <option value="Cram School">Cram School</option>
                                        <option value="TOEFL Preparation">TOEFL Preparation</option>
                                        <option value="TOEIC Preparation">TOEIC Preparation</option>
                                        <option value="IELTS Preparation">IELTS Preparation</option>
                                        <option value="In-company Training">In-company Training</option>
                                        <option value="English Conversation Training">English Conversation Training</option>
                                        <option value="Private Class">Private Class</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="schedule" class="form-label">Jadwal</label>
                                    <select class="form-select" aria-label="Schedule" name="schedule" id="schedule" required>
                                        <option value="" disabled selected>Harap pilih program terlebih dahulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-check d-flex">
                            <input class="form-check-input" type="checkbox" value="true" id="checkAgreement" required>
                            <label class="form-check-label" for="checkAgreement">
                                <p id="agreeTerms">Saya telah membaca dan menyetujui <a href="/" style="color:#06B6D4;" class="text-decoration-none">Ketentuan Layanan</a> dan <a href="/" style="color:#06B6D4;" class="text-decoration-none">Kebijakan Privasi</a></p>
                            </label>
                        </div>
                    </section>
                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none;">Register</button>
                </form>
            </div>
        </div>
    </section>

    <!-- JQUERY SCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="js/reg.js"></script>
</body>

</html>