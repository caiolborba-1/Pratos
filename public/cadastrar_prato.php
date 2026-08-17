<?php

include "../infra/conexao.php";

$Nome = $_POST["Nome"];
$Preco = $_POST["Preço"];
$descricao = $_POST["Descrição"];
$categoria = $_POST["categoria"]

$sql = "INSERT INTO Pratos (Nome,Preco,descricao,categoria) VALUES ('$Nome','$Preco','$descricao','$categoria')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>