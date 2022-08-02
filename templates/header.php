<?php
include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <title>Blog Codar</title>
</head>
<body>
    <header>
       <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
        </a>

        <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?= $BASE_URL ?> ">Home</a></li>
                <li><a class="nav-link" href="#">Categorias</a></li>
                <li><a class="nav-link" href="#">Sobre</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL ?>/contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>