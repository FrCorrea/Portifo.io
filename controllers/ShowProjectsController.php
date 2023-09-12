<?php
session_start();

include '../models/model.user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'] ?? '';
    $type = $_POST['type'];

    if (isset($_POST['type']) && isset($userId)) {
        $type = $_POST['type'];
    
        // Encontre o usuário com base no userId
        $user = null;
        foreach ($users as $user) {
            if ($user['id'] === $userId) {
                $user = $user;
                break;
            }
        }

        // Se o usuário for encontrado, filtre os projetos com base no tipo
        if ($user) {
            $filteredProjects = [];
            foreach ($user['projects'] as $project) {
                if ($project['type'] === $type) {
                    $filteredProjects[] = $project;
                }
            }

            // Retorna os projetos filtrados como JSON
            
            //header('Content-Type: application/json');
            echo json_encode($filteredProjects);
            $_SESSION['filtered_projects'] = json_encode($filteredProjects);
            header('Location: ../views/pages/websites_page.php'); // Redireciona para a área protegida
        } else {
            // Retorna uma mensagem de erro se o usuário não for encontrado
            header('HTTP/1.1 404 Not Found');
            echo json_encode(['error' => 'Usuário não encontrado']);
        }
    } else {
        // Retorna uma mensagem de erro se tipo ou userId não forem enviados
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Parâmetros ausentes']);
    }
}

?>