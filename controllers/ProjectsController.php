<?php
session_start();

include '../models/model.user.php';

$user = null;
foreach ($users as $currentUser) {
    if ($user['id'] === $userId) {
        $user = $currentUser;
        break;
    }
}

class ProjectsController
{
    public function showProjects()
    {
        global $user;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['user_id'] ?? '';
            $type = $_POST['type'];

            if (isset($_POST['type']) && isset($userId)) {
                $type = $_POST['type'];

                if ($user) {
                    $filteredProjects = [];
                    foreach ($user['projects'] as $project) {
                        if ($project['type'] === $type) {
                            $filteredProjects[] = $project;
                        }
                    }

                    $filteredProjects = json_encode($filteredProjects);
                    require './views/pages/home_page.php';
                    // $_SESSION['filtered_projects'] = json_encode($filteredProjects);
                    // $_SESSION['type'] = $type;
                    // header('Location: /Portifo.io/views/pages/home_page.php');
                } else {
                    header('HTTP/1.1 404 Not Found');
                    echo json_encode(['error' => 'Usuário não encontrado']);
                }
            } else {
                header('HTTP/1.1 400 Bad Request');
                echo json_encode(['error' => 'Parâmetros ausentes']);
            }

            //$this->view('home-view', ['projects' => $filteredProjects]);
        }
    }

    public function addProjects()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $githubLink = $_POST['github-link'];
            $description = $_POST['description'];
            $technologies = $_POST['technologies'];

            if (!($name) || !($type) || ($type == "Select the project type")) {
                header('Location: /Portifo.io/views/pages/add_project_page.php?error=Os campos de nome e tipo não podem ser vazios.');
                exit;
            } else {
                header('Location: /Portifo.io/views/pages/home_page.php?success=Projeto adicionado com sucesso.');
            }
        }
    }
}
