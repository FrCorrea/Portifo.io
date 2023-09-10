<?php
session_start();

include '../models/model.user.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $githubLink = $_POST['github-link'];
    $description = $_POST['description'];
    $technologies = $_POST['technologies'];

    if (!($name) || !($type)) {
        header('Location: ../views/pages/add_project_page.php?error=Os campos de nome e tipo não podem ser vazios.');
        exit;
    } else {
        header('Location: ../views/pages/home_page.php');
    }
}
?>