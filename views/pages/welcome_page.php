<!doctype html>
<html lang="en">

<style>
body {
  background-image: url('../assets/background.png');
  background-repeat: no-repeat;
  background-size: cover;
}

.welcome-container {
    display: flex;
    justify-content: center;
}

.welcome-center-container {
    margin-left: 0 auto;
    padding-top: 10%;
    text-align: center;
}

.logo-welcome-big {
    font-family: 'Mochiy Pop P One', sans-serif;
    font-size: 100px;
}

.welcome-buttons {
    margin-top: 4rem;
}

.welcome-button {
    width: 240px;
}

.btn-yellow-custom {
    border: 1px solid #212529;
    background-color: #FCFFF4;
    border-radius: 0.375rem;
    padding: 0.375rem 0.75rem;
    margin-top: 0;
    font-weight: 500;
    transition: .15s ease-in-out;
}

.btn-yellow-custom:hover {
    background-color: #ECF1DA;
}

.welcome-subtitle {
    font-style: italic;
    color: #79747E;
    font-weight: 400;
}

</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfol.io</title>

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

    <?php include('../components/footer.php') ?>

    <div class="welcome-container">
        <div class="welcome-center-container">
            <div class="logo-box">
                <h1 class="logo-welcome-big">Portfol.io</h1>
                <h3 class="welcome-subtitle">Share your projects with the world!</h3>
            </div>
            <div class="welcome-buttons">
                <button type="button" class="btn btn-dark welcome-button" onclick="location.href = '/register';">
                    Create account
                </button>
                <button type="button" class="btn-yellow-custom welcome-button" onclick="location.href = '/public-projects';">
                    See all projects
                </button>
            </div>
        </div>
    </div>
</body>

</html>