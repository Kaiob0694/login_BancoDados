<?php

include "../src/conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$livro = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" href="assets/css/style_cadastro.css">
</head>

<body>

<div class="container">

    <h1>Editar Livro</h1>

    <form action="../src/atualizar_livro.php" method="POST">

        <input 
            type="hidden"
            name="id"
            value="<?php echo $livro['id']; ?>"
        >

        <input 
            type="text"
            name="titulo"
            value="<?php echo $livro['titulo']; ?>"
            placeholder="Título"
            required
        >

        <input 
            type="text"
            name="autor"
            value="<?php echo $livro['autor']; ?>"
            placeholder="Autor"
            required
        >

        <input 
            type="text"
            name="isbn"
            value="<?php echo $livro['isbn']; ?>"
            placeholder="ISBN"
            required
        >

        <input 
            type="number"
            name="ano"
            value="<?php echo $livro['ano']; ?>"
            placeholder="Ano"
            required
        >

        <button type="submit">
            Atualizar
        </button>

    </form>

</div>

</body>
</html>