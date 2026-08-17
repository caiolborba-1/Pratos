<?php

include "../infra/conexao.php";

$Nome = $_POST["Nome"];
$Preco = $_POST["Preço"];
$descricao = $_POST["Descrição"];
$categoria = $_POST["categoria"]

$sql = "INSERT INTO livros (titulo,autor,ano) VALUES ('$titulo','$autor','$ano')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>