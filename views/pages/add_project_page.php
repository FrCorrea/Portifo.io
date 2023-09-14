<?php
session_start();

if (empty($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    echo "entrou";
    header('Location: login_page.php');
}
?>

<?php include('../components/header.php') ?>
<?php include('../components/aside.php') ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Portifo.io</title>

    <link rel="stylesheet" type="text/css" href=../assets/style.css>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:wght@100;300&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <div class="add-project-container">
        <div class="add-project-header">
            <h3><b>Add new project</b></h3>
            <button type="button" class="btn btn-dark btn-floating btn-back-custom" onclick="location.href = 'home_page.php';">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
        </div>
        <div class="project-inputs">
            <form method="POST" action="../../controllers/AddProjectController.php">
                <div class="row input-row">
                    <div class="col-sm from-group">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" />
                    </div>
                    <div class="col-sm ">
                        <label class="form-label">Type</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option selected>Select the project type</option>
                            <option value="1">Website</option>
                            <option value="2">Application</option>
                            <option value="3">Design</option>
                        </select>
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm from-group">
                        <label class="form-label">Github Link</label>
                        <input class="form-control" type="text" name="github-link" />
                    </div>
                    <div class="col-sm from-group">
                        <label for="disabledTextInput" class="form-label">Users</label>
                        <input class="form-control" id="disabledInput" type="text" name="users" placeholder="Option not available at the moment" disabled>
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="textAreaExample3" rows="2" name="description"></textarea>
                    </div>
                    <div class="col-sm">
                        <label class="form-label">Technologies</label>
                        <textarea class="form-control" id="textAreaExample3" rows="2" name="technologies"></textarea>
                        <div id="emailHelp" class="form-text">Separate the technologies using a comma ( , ).</div>
                    </div>
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
                   
                <div class="buttons-group">
                    <button type="submit" class="btn btn-dark btn-custom">Add project</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>