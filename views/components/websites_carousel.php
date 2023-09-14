<section class="pt-5 pb-5">
	<div class="cards-container">
		<?php
		if (isset($_SESSION['filtered_projects'])) {
			$filteredProjectsString = $_SESSION['filtered_projects'];
			$filteredProjects = json_decode($filteredProjectsString);

			foreach ($filteredProjects as $project) {
				echo '    <div class="card project-card">';
				echo '        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">';
				echo '            <div class="card-body">';
				echo '                <h4 class="card-title">' . $project->name . '</h4>';
				echo '                <p class="card-text">' . $project->description . '</p>';
				echo '            </div>';
				echo '    </div>';
			}
		} else {
			echo 'No filtered projects found.';
		}
		?>
	</div>
</section>