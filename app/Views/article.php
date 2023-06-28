<?php
$db = \Config\Database::connect();
$i = 0;
$query   = $db->query('SELECT judul_artikel, isi_artikel, last_update, foto_artikel FROM tartikel WHERE status= "Publish" ORDER BY id_artikel DESC');
$results = $query->getResult();

foreach ($results as $row) {
    $judul[$i] = $row->judul_artikel;
    $isi[$i] = $row->isi_artikel;
    $tanggal[$i] = $row->last_update;
    $foto[$i] = $row->foto_artikel;
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
    <link rel="stylesheet" type="text/css" href="css/styleArticle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top py-1" id="nav">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-3" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Programs</a></li>
            <li>
                <a href="/article" class="nav-link px-md-4" style="color: #06B6D4;">
                    Article
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
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

<body>
    <h1 class="container-md pt-5">The Blog</h1>
    <section class="container-md py-2" id="featuredBlog">
        <div class="row">
            <img src="/assets/artikel/<?= $foto[$i] ?>" class="col-auto col-md-5">

            <div class="col-auto col-md-7 pt-3 pt-md-0">
                <h2><?php echo $tanggal[$i]; ?></h2>
                <h1 class="fw-bold"> <?php echo $judul[$i]; ?> </h1>
                <p class="fs-3" style="text-align: justify;"> <?php echo $isi[$i];
                                                                $i = $i + 1; ?> </p>
            </div>
        </div>
    </section>
    <section class="container-md py-5" id="otherBlogs">
        <div class="row justify-content-between">
            <div class="col-md-3 col-auto pb-3 pb-md-0">
                <img src="/assets/artikel/<?= $foto[$i] ?>">
                <p class="my-2"><?php echo $tanggal[$i]; ?></p>
                <h5 class="fw-bold m-0 p-0"><a href="#" class="text-decoration-none link-dark"><?php echo $judul[$i];
                                                                                                $i = $i + 1; ?></a></h5>
            </div>
            <div class="col-md-3 col-auto pb-3 pb-md-0">
                <img src="/assets/artikel/<?= $foto[$i] ?>">
                <p class="my-2"><?php echo $tanggal[$i]; ?></p>
                <h5 class="fw-bold m-0 p-0"><a href="#" class="text-decoration-none link-dark"><?php echo $judul[$i];
                                                                                                $i = $i + 1; ?></a></h5>
            </div>
            <div class="col-md-3 col-auto pb-3 pb-md-0">
                <img src="/assets/artikel/<?= $foto[$i] ?>">
                <p class="my-2"><?php echo $tanggal[$i]; ?></p>
                <h5 class="fw-bold m-0 p-0"><a href="#" class="text-decoration-none link-dark"><?php echo $judul[$i];
                                                                                                $i = $i + 1; ?></a></h5>
            </div>
        </div>
    </section>
</body>

</html>