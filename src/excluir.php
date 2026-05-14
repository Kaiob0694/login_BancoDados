<?php

include "conexao.php";

if(isset($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM livros WHERE id = ?";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    if(mysqli_stmt_execute($stmt)) {

        header("Location: " . $_SERVER['HTTP_REFERER']);

    } else {

        echo "Erro ao excluir.";

    }

} else {

    echo "ID não recebido.";

}