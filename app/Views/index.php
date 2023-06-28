<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top py-1" id="shadow">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-3" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li>
                <a href="/" class="nav-link px-md-4" style="color: #06B6D4;">
                    Home
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Programs</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>


        <?php $session = session();
        if ($session->get('fname') != NULL) {
            echo '<a href="/profile" class="d-flex align-items-center justify-content-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <img class="bi me-md-3 me-1" width="55" src="assets/profile/' . $session->get('profilePicture') . '" style="border-radius: 50%;">
                        <h5 class="my-0 ms-2">' . $session->get('fname') . " " . $session->get('lname') . " " . ' </h5>
                    </a>';
        } else {
            echo
            '<div class="col-md-3 text-end">
                    <a href="/login" role="button" class="btn btn-light px-md-3 me-2" id="login">Login</a>
                    <a href="/register" role="button" class="btn text-white px-md-4" id="register">Register</a>
                </div>';
        }
        ?>

    </div>
</header>

<body>
    <section class="container-fluid justify-content-center carousel slide p-0" id="hero" data-bs-ride="carousel">
        <div class="text-white fw-bold" id="caption">
            <strong class="text-left">
                <?php $session = session();
                echo "Welcome,";
                echo '<br/>';
                if ($session->get('fname') != NULL) {
                    echo $session->get('fname') .  " " . $session->get('lname');
                } else {
                    echo "Student";
                }
                ?></strong>
            <div class="pt-2 pt-md-4" id="captionReg">
                <a href="/register" class="text-decoration-none text-white rounded px-3 py-2" style="background-color: #06B6D4;"><strong>Register Now</strong></a>
            </div>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2500">
                <img src="pics/Hero1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="pics/Hero2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="pics/Hero3.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light py-5">
        <h2 class="text-center fw-bold">Best Programs</h2>
        <!-- Swiper -->
        <div class="container p-5 swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro1.png">
                    <article class="p-3">
                        <h4 class="fw-bold">Private Class</h4>
                        <hr>
                        <p class="p-2">
                            Program ini ditujukan untuk peserta didik dari semua tingkatan (SD/SMP/SMA/Mahasiswa/Umum) yang ingin belajar secara intensive.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro2.png">
                    <article class="p-3">
                        <h4 class="fw-bold">English for Smart Kids</h4>
                        <hr>
                        <p class="p-2" style="font-size: 16px;">
                            Program ini bisa diikuti oleh anak-anak mulai dari TK A – TK B dan SD kelas 1- 6. Materi yang dipelajari meliputi 4 aspek kebahasaan yaitu listening, reading writing dan speaking.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro3.png">
                    <article class="p-3">
                        <h4 class="fw-bold">English for Smart Teens</h4>
                        <hr>
                        <p class="p-2">
                            Program ini diperuntukan untuk siswa SMP dan SMA. Maeteri yang diajarkan terdiri atas listening, reading, writing dan speaking.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro1.png">
                    <article class="p-3">
                        <h4 class="fw-bold">4</h4>
                        <hr>
                        <p class="p-2">
                            Program ini ditujukan untuk peserta didik dari semua tingkatan (SD/SMP/SMA/Mahasiswa/Umum) yang ingin belajar secara intensive.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro1.png">
                    <article class="p-3">
                        <h4 class="fw-bold">5</h4>
                        <hr>
                        <p class="p-2">
                            Program ini ditujukan untuk peserta didik dari semua tingkatan (SD/SMP/SMA/Mahasiswa/Umum) yang ingin belajar secara intensive.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="swiper-slide card border">
                    <img class="p-3" src="pics/pro1.png">
                    <article class="p-3">
                        <h4 class="fw-bold">6</h4>
                        <hr>
                        <p class="p-2">
                            Program ini ditujukan untuk peserta didik dari semua tingkatan (SD/SMP/SMA/Mahasiswa/Umum) yang ingin belajar secara intensive.
                        </p>
                        <a href="/register" class="text-decoration-none text-white text-center">
                            <div class="container-fluid rounded py-2 my-3" style="background-color: #06B6D4;">
                                <strong>Daftar</strong>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- JQUERY SCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>

</html>