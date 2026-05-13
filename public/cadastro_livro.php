<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/style_cadastro.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Livro</h1>

    <form action="../src/cadastrar_livro.php" method="POST">
        <input type="text" value="Automático" class="id-field" disabled>
        <input type="text" name="nome" placeholder="Titolo" required>
        <input type="text" name="titulo" placeholder="Autor" required>
        <input type="number" name="isbn" placeholder="ISBN" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <button type="submit">Salvar</button>
    </form>

    <a href="index.php">Voltar para login</a>

</div>

</body>
</html>