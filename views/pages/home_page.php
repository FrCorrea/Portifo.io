<?php
session_start();

if (empty($_SESSION['user']) || !$_SESSION['user']) {
	echo "entrou";
	header('Location: /login');
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Portfol.io | Home</title>

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

	<?php include('../components/header.php') ?>
	<?php include('../components/aside.php') ?>

    <div class="projects-container">
        
        <div class="projects-header">
            <h3 class="projects-title"><i>
            <?php echo $_SESSION['type'] ?? '' ?>    
            <h2><?= $filteredProjects ?></h2>
            <i></h3>
            <button type="button" class="btn btn-dark" onclick="location.href = 'add_project_page.php';">Add Project</button>

		<section class="pt-5 pb-5">
			<div class="cards-container">
				<?php
				if (isset($_SESSION['filtered_projects'])) {
					$filteredProjectsString = $_SESSION['filtered_projects'];
					$filteredProjects = json_decode($filteredProjectsString);

					foreach ($filteredProjects as $project) {
				?>
						<div class="card project-card">
							<button type='button' class='btn btn-secondary btn-edit' onclick="location.href = 'edit_project_page.php';">

								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">'
									<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
								</svg>
							</button>
							<img class="img-fluid" alt="100%x280" src="https://img.freepik.com/free-vector/website-setup-concept-illustration_114360-4256.jpg">
							<div class="card-body">
						<?php
						echo '                	<h4 class="card-title">' . $project->name . '</h4>';
						echo '                	<p class="card-text">' . $project->description . '</p>';
						echo '					<div class="card-techs-container">';
						foreach ($project->technologies as $technology) {
							echo '					<span class="badge bg-dark">' . $technology . '</span>';
						}
						echo '					</div>';
						echo '            </div>';
						echo '    </div>';
					}
				} else {
					echo 'No filtered projects found.';
				}
						?>
							</div>
		</section>
	</div>
	<button type="button" class="btn btn-danger btn-logout" onclick="location.href = 'logout.php';">Logout</button>
</body>
</html>