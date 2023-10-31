<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfol.io | Public Projects</title>

    <link rel="stylesheet" type="text/css" href="views/assets/styles/pages/public-projects.css">
    <link rel="stylesheet" type="text/css" href="views/assets/style.css">

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

    <?php include('views/components/welcome_header.php') ?>
    <?php include('views/components/footer.php') ?>

    <div class="public-projects-container">
        <div class="public-projects-center-container">
            <div class="logo-box">
                <h1 class="logo-public-projects">Portfol.io</h1>
            </div>
            <div class="public-projects-search-title">
                <label for="search">Search a project by project name or author name!</label>
            </div>
            <div class="search-box">

            <form method="POST" action="/search">
                <input type="search" id="name" name="name" class="rounded-input" />
                <button type="submit" class="btn btn-dark public-projects-button">Buscar</button>
            </form>

            </div>
            <div class="projects-container">
            
            <?php 
                $data = json_decode($projects, true);
                
                if ($data === null || $data === false) {
                    echo '<h1>Nenhum projeto encontrado</h1>';
                } else {
                    if (isset($data['id'])) {
                        // $data is a single JSON object
                        $json = $data;
                        echo '<div class="card project-card">';
                        echo '<img class="img-fluid" alt="100%x280" src="https://img.freepik.com/free-vector/website-setup-concept-illustration_114360-4256.jpg">';
                        echo '<div class="card-body">';
                        echo '<h4 class="card-title">' . $json['name'] . '</h4>';
                        echo '<p class="card-text">' . $json['description'] . '</p>';
                
                        echo '<div class="card-techs-container">';
                        $technologies = explode(',', $json['technologies']);
                        foreach ($technologies as $technology) {
                            echo '<span class="badge bg-dark">' . trim($technology) . '</span>';
                        }
                        echo '</div>';
                
                        echo '</div>';
                        echo '</div>';
                    } else {
                        // $data is a list of JSON objects
                        foreach ($data as $json) {
                            echo '<div class="card project-card">';
                            echo '<img class="img-fluid" alt="100%x280" src="https://img.freepik.com/free-vector/website-setup-concept-illustration_114360-4256.jpg">';
                            echo '<div class="card-body">';
                            echo '<h4 class="card-title">' . $json['name'] . '</h4>';
                            echo '<p class="card-text">' . $json['description'] . '</p>';
                
                            echo '<div class="card-techs-container">';
                            $technologies = explode(',', $json['technologies']);
                            foreach ($technologies as $technology) {
                                echo '<span class="badge bg-dark">' . trim($technology) . '</span>';
                            }
                            echo '</div>';
                
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                }
                ?>
        </div>
        </div> 
    </div>
</body>

</html>