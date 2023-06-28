<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top shadow shadow-offset-down-md py-3" id="nav">
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
    <section class="container-fluid py-5">
        <div class="container-md bg-white" id="bgLogin">
            <div class="row text-center py-3" id="navLogin">
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/login" class="nav-link" style="color: #06B6D4;">
                                Login
                                <div id="activeNav">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/register" class="nav-link link-dark text-muted">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-md px-md-5 px-3 py-md-4 py-3" id="formLogin">
                <h2 class="text-center pb-3 pb-md-5">Welcome back, Student!</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form class="container col-md-6 col-12" action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="email" name="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?= set_value('password') ?>">
                    </div>
                    <div class="d-flex flex-wrap justify-content-between mb-3" style="font-size: 12px;">
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

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>