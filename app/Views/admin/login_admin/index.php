<!DOCTYPE html>
<html lang="en">
<title>Login</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="card m-5 p-5">
        <h1>Silahkan Login</h1>

        <div style="color:red;">
            <?php
            if (isset($_COOKIE["message"])) {
                echo $_COOKIE["message"];
            }
            ?>
        </div>
        <form class="row g-3 m-3" action="<?= base_url(); ?>/admin_login/process" method="post">


            <div class="col-md-6">
                <label for="nama" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="col-12 d-grid gap-2">
                <button type="submit" name="add" class="btn btn-primary">Login</button>
            </div>
        </form>
        Username: admin<br>
        Password: 123
    </div>

</body>

</html>