<?php
    session_start();
    require_once 'db/conn.php';
    require_once 'includes/header.php';
    echo 'about us'.'<br>'.$_SESSION['email'].' '.$_SESSION['password'];



    require_once 'includes/footer.php';
?>
