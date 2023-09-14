<section class="pt-5 pb-5">
	<div class="cards-container">
		<?php
		if (isset($_SESSION['filtered_projects'])) {
			$filteredProjectsString = $_SESSION['filtered_projects'];
			$filteredProjects = json_decode($filteredProjectsString);

			foreach ($filteredProjects as $project) {
				echo '    <div class="card project-card">';
				echo '        <img class="img-fluid" alt="100%x280" src="https://img.freepik.com/free-vector/website-setup-concept-illustration_114360-4256.jpg">';
				echo '            <div class="card-body">';
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