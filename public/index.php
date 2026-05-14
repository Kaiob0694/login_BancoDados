<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="left">
        <img src="assets/img/home.png" alt="Imagem">
    </div>

    <div class="right">

        <div class="container">

            <!-- LOGO -->
            <img src="assets/img/silent_Page.png" alt="Logo" class="logo">

            <h1>Login</h1>

            <form action="../src/auth.php" method="POST">
                <input type="email" name="email" placeholder="Digite seu email" required>

                <input type="password" name="senha" placeholder="Digite sua senha" required>

                <button type="submit">Entrar</button>
            </form>

            <a href="cadastro.php" class="btn-cadastro">
                Cadastrar novo usuário
            </a>

        </div>

    </div>

</body>

</html>