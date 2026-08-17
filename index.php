
<?php

include "infra/conexao.php";
$Usuario = mysqli_query($conexao, "SELECT * FROM livros");

?>



<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Livraria</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

    <header>
        <h1>cadastrar usuario</h1>
    </header>
    <main>
        <h2>Cadastro</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="Usuario">Usuario:</label>
            <input type="text" name="Usuario">
            <br>
            <label for="Email">Email:</label>
            <input type="text" name="Email">
            <br>
            <button type="submit">Cadastrar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>