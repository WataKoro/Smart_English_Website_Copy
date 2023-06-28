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
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li>
                <a href="/about" class="nav-link px-md-4" style="color: #06B6D4;">
                    About
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
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

    <section class="container-md py-2">
        <h1 class="my-5 text-center fw-bold">Tentang Kami</h1>

        <div class="row justify-content-center mb-3 mb-md-5" id="firstRow">
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Diky.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Diky Ramdani, M.Pd</h5>
                <p class="fw-bold" style="color:#06B6D4;">Branch Manager</p>
            </div>
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Ridha.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Ridha Aska Amanda, M.Pd</p>
                <p class="fw-bold" style="color:#06B6D4;">Academic Manager</p>
            </div>
        </div>

        <div class="row justify-content-center mb-3 mb-md-5" id="secondRow">
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Lin.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Lin Sundari, S.Pd</p>
                <p class="fw-bold" style="color:#06B6D4;">Instructor</p>
            </div>
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Nida.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Nida Ainun Najmillah, S.Pd</p>
                <p class="fw-bold" style="color:#06B6D4;">Instructor</p>
            </div>
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Rizal.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Rizal Anthony, S.Pd</p>
                <p class="fw-bold" style="color:#06B6D4;">Instructor</p>
            </div>
            <div class="col-md-3 col-auto mb-4 mb-md-0 text-center">
                <img src="pics/Liban.png" style="border-radius:50%;">
                <p class="mt-4 mb-0 p-0" style="font-size:20px;">Liban Hasen Abdi</p>
                <p class="fw-bold" style="color:#06B6D4;">Instructor<br>(Native Teacher)</p>
            </div>
        </div>

    </section>

</body>

</html>