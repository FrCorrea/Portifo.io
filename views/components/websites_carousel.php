<section class="pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-6">
			</div>
			<div class="col-12">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">

						<?php
						// Check if the session variable 'filteredProjects' exists
						if (isset($_SESSION['filtered_projects'])) {
							// Access the filtered projects from the session
							$filteredProjects = $_SESSION['filtered_projects'];

							// Loop through $filteredProjects and create your card components
							foreach ($filteredProjects as $project) {
								// Create HTML card components using the project data
								//   echo '<div class="card">';
								//   echo '<h3>' . $project['name'] . '</h3>';
								//   echo '<p>' . $project['description'] . '</p>';
								//   // Add more HTML elements as needed
								//   echo '</div>';

								echo '<div class="col-md-4 mb-3">';
								echo '    <div class="card">';
								echo '        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">';
								echo '            <div class="card-body">';
								echo '                <h4 class="card-title">' . $project['name'] . '</h4>';
								echo '                <p class="card-text">' . $project['description'] . '</p>';
								echo '            </div>';
								echo '    </div>';
								echo '</div>';
							}
						} else {
							// Handle the case where 'filteredProjects' is not set in the session
							echo 'No filtered projects found.';
						}
						?>

					</div>
				</div>
			</div>
		</div>
</section>