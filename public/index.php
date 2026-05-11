<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($user === 'admin' && $pass === '123') {
        session_regenerate_id(true);
        $_SESSION['user'] = 'admin';
        header('Location: dashboard.php');
        exit;
    } else {
        $erro = "Você não tem acesso";
    }
}
?>

<link rel="stylesheet" href="assets/css/style.css">

<div class="container">
    <h1>Login</h1>

    <form action="../src/auth.php" method="post">
        <input type="email" name="email" placeholder="Digite seu E-mail" required>
        <input type="password" name="senha" placeholder="Digite sua Senha" required>
        <button type="submit">Entar</button>
    </form>

    <?php if (!empty($erro)): ?>
        <p class="erro"><?= $erro ?></p>
    <?php endif; ?>
</div>