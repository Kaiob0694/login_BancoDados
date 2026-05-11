<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="assets/css/style.css">

<div class="container">
    <h1>Bem-vindo à área restrita</h1>
    <a href="logout.php">Sair</a>
</div>