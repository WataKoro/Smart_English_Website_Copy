<?php
$db = \Config\Database::connect();
$i = 0;
$query   = $db->query('SELECT email, alamat, telp, wa_number FROM tkontak');
$results = $query->getResult();

foreach ($results as $row) {
    $email[$i] = $row->email;
    $alamat[$i] = $row->alamat;
    $telp[$i] = $row->telp;
    $wa_number[$i] = $row->wa_number;
    $i = $i + 1;
}
$i = 0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleContact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
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
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Programs</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li>
                <a href="/contact" class="nav-link px-md-4" style="color: #06B6D4;">
                    Contact
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
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
                </div>';
        }
        ?>
    </div>

</header>

<body class="p-0">
    <div class="container-fluid mt-3" style="background-color: #dcdcdc;">
        <div class="d-flex align-items-center float-end">
            <select class="form-select border-0" aria-label="Default select example">
                <option value="Indonesia" selected>Indonesia</option>
                <option value="English">English</option>
            </select>
        </div>
    </div>

    <section class="container-fluid py-2">
        <h1 class="container-md my-md-5 mt-5 mb-3 text-center">Kontak Kami</h1>

        <div class="row justify-content-center px-5">
            <div id="listContact" class="col-md-4 col-auto me-0 me-md-5 mb-5 mb-md-0">
                <div class="d-flex align-items-center" id="email">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Email</h3>
                        <p class="text-dark"><?php echo $email[$i]; ?></p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Alamat</h3>
                        <p class="text-dark"><?php echo $alamat[$i]; ?></p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="telp">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Telp</h3>
                        <p class="text-dark"><?php echo $telp[$i]; ?></p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="WhatsApp">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>WhatsApp</h3>
                        <p class="text-dark"><?php echo $wa_number[$i]; ?></p>
                    </div>
                </div>
            </div>
            <div id="2" class="col-md-6 col-auto">
                <form action="<?php echo base_url('Contact/sendMail') ?>">
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="fname" class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Depan" id="fname" aria-describedby="First Name" name="fname" required>
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="Email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input type="text" class="form-control" placeholder="Subjek" id="subjek" aria-describedby="Subjek" name="subjek" required>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Pesan" id="Pesan" style="height: 321px"></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div>

                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none; height:48px;">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

</body>

<footer class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 bg-white border py-2">
            <div class="container p-lg-5">
                <a href="#"><img src="pics/Logo.png" class="mt-2 mb-4" style="max-height: 120px;"></a>
                <h3>Smart English</h3>
                <p class="mb-3">Jl. Jalan No.123, Kelurahan, Kecamatan, Kota Tangerang, <br> Jawa Barat 14045 </p>
                <span class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <p class="ps-2">+62 12 333 444</p>
                </span>
                <span class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="28" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    <p class="ps-2">CS@SmartEnglish.id</p>
                </span>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 bg-light py-3">
            <div class="container-md p-lg-5">
                <div class="fs-6 row">
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <div>
                            <b><a href="#" class="text-decoration-none text-dark">Produk Lainnya</a></b> <br> <br>
                            <a href="#" class="text-decoration-none text-dark">Lorem</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Ipsum</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Dolor</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Sit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <div>
                            <b><a href="#" class="text-decoration-none text-dark">Panduan</a></b> <br> <br>
                            <a href="#" class="text-decoration-none text-dark">Lorem</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Ipsum</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Dolor</a> <br>
                            <a href="#" class="text-decoration-none text-dark">Sit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>