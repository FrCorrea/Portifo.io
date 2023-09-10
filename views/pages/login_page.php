<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $error = false;

    session_start();

    if($email == 'admin@gmail.com' && $password == '12345'){
        $_SESSION['loggin'] = true;
        $_SESSION['email'] = $email;
        header('Location: home_page.php');
    } elseif (!empty($_POST)){
        $error = true;
    }
?>

<?php include('../components/header.php') ?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - Portifo.io</title>

  <link rel="stylesheet" type="text/css" href="../assets/style.css">

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

  <div class="login-container">
    <div class="welcome-box">
        <h2 class="title-welcome">Welcome to</h2>
        <h1 class="logo-big">Portfol.io</h1>
    </div>
    <h1 class="create-account-text">Login</h1>
    <div class="form-box">
        <form method="POST" action="login_page.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <div id="password-help" class="form-text">Must be at least 6 characters and contain a number.</div>
            </div>
            <?php if($error): ?>
                <div class="alert alert-danger">
                    Invalid email or password!
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-dark btn-create">Enter</button>
            <button type="button" class="btn btn-dark btn-create"> <a href="register_page.php">Register</a></button>
        </form>
    </div>
</div>
<img src="../assets/clipboard.png" alt="" class="img-clipboard">
    <img src="../assets/pointer.png" alt="" class="img-pointer">
    <?php include('../components/footer.php') ?>
</body>

</html>
