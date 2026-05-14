<?php

include "conexao.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$ano = $_POST['ano'];

$sql = "UPDATE livros 
SET titulo = ?, autor = ?, isbn = ?, ano = ?
WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssii",
    $titulo,
    $autor,
    $isbn,
    $ano,
    $id
);

if(mysqli_stmt_execute($stmt)) {

    header("Location: ../public/dashboard.php");

} else {

    echo "Erro ao atualizar.";

}