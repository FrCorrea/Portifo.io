<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfol.io | Login</title>

    <link rel="stylesheet" type="text/css" href="/Portifo.io/views/assets/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:wght@100;300&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <?php include('views/components/header.php') ?>
    <?php include('views/components/footer.php') ?>
    
    <div class="login-container">
        <div class="welcome-box">
            <h2 class="title-welcome">Welcome to</h2>
            <h1 class="logo-big">Portfol.io</h1>
        </div>
        <h1 class="create-account-text">Login</h1>
        <div class="form-box">
            <form method="POST" action="/Portifo.io/controllers/LoginController.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <?php
                $error = null;
                $success = null;

                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                }
                if (isset($_GET['success'])) {
                    $success = $_GET['success'];
                }

                if ($success) {
                    echo '<div class="alert alert-success">';
                    echo $success;
                    echo '</div>';
                }

                if ($error) {
                    echo '<div class="alert alert-danger">';
                    echo $error;
                    echo '</div>';
                }
                ?>
                <div class="login-buttons-group">
                    <button type="submit" class="btn btn-dark btn-create">Enter</button>
                    <button type="button" class="btn btn-dark btn-create" onclick="location.href = 'views/pages/register_page.php';">Register</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <img src="/Portifo.io/views/assets/clipboard.png" alt="" class="img-clipboard">
    <img src="/Portifo.io/views/assets/pointer.png" alt="" class="img-pointer">
</body>

</html>