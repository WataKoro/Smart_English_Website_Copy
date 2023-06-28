<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleProfile.css">
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
        <h1 class="container-md my-md-5 mt-5 mb-3 text-center">Profil</h1>
        <div class="container-md justify-content-center">
            <div class="text-center">
                <img src="assets/profile/<?= $session->get('profilePicture') ?>" height="200" style="border-radius:50%;">
                <h2 class="mt-3 text-dark fw-bold">
                    <?php $session = session();
                    echo $session->get('fname') . " " . $session->get('lname');
                    ?>
                </h2>
            </div>
            <section class="container-md bg-light mt-3 mt-md-5 py-3 py-md-5" id="bio">
                <form class="container-md py-3 py-md-5 align-items-center justify-content-center" id="profilePicture" action="/profile/save" method="post" enctype="multipart/form-data">
                    <svg xmlns="http://www.w3.org/2000/svg" class="container mb-3" height="108" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <input class="form-control" type="file" id="profilePicture" name="profilePicture">
                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none;">Upload</button>
                </form>
                <div class="container-md pt-3 pt-md-5 align-items-center justify-content-center" id="dataTable">
                    <table class="container-fluid">
                        <tr class="row mb-3">
                            <td class="col-6">Email</td>
                            <td class="col-6">
                                <?php $session = session();
                                echo $session->get('email');
                                ?>
                            </td>
                        </tr>
                        <tr class="row mb-3">
                            <td class="col-6">Sekolah</td>
                            <td class="col-6">
                                <?php $session = session();
                                echo $session->get('school');
                                ?>
                            </td>
                        </tr>
                        <tr class="row mb-3">
                            <td class="col-6">Alamat</td>
                            <td class="col-6">
                                <?php $session = session();
                                echo $session->get('province') . ", " . $session->get('city');
                                ?>
                            </td>
                        </tr>
                        <tr class="row mb-3">
                            <td class="col-6">No. HP</td>
                            <td class="col-6">
                                <?php $session = session();
                                echo $session->get('phone');
                                ?>
                            </td>
                        </tr>
                        <tr class="row mb-1">
                            <td class="col-6">Password</td>
                            <td class="col-6">**************</td>
                        </tr>
                        <tr class="row">
                            <td class="col-6"></td>
                            <td class="col-auto ms-2" class="" style="background-color:#06B6D4; border-radius: 3px;">
                                <a href="#" class="text-white text-decoration-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18" class="my-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Ubah Password
                                </a>
                            </td>
                        </tr>
                    </table>
                    <form class="container col-md-6 col-12" action="/login/logout" method="post">
                        <button type="submit" class="btn btn-danger col-12 mt-3 py-2">Logout</button>
                    </form>
                </div>
            </section>

        </div>

    </section>
</body>

</html>