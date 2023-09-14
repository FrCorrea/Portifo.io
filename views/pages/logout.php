<?php
    session_start();
    session_destroy();
    header('Location: /Portifo.io/views/pages/login_page.php');
?>