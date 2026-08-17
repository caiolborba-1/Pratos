<?php

include "../infra/conexao.php";

$Nome = $_POST["Nome"];
$Preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO Pratos (Nome, Preco, descricao, categoria) 
        VALUES ('$Nome', '$Preco', '$descricao', '$categoria')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");

?>