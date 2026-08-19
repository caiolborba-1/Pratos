<?php

include "infra/conexao.php";
if (!isset($conn) || $conn === null) {
    die('Erro ao conectar com o banco de dados.');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';

    $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ss', $nome, $email);

    if (mysqli_stmt_execute($stmt)) {
        echo "Usuário cadastrado com sucesso!";
        echo "<br><a href='../index.php'>Voltar</a>";
        mysqli_stmt_close($stmt);
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Livraria</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

    <header>
        <h1>Cadastrar Usuário</h1>
    </header>

    <main>
        <h2>Cadastro</h2>

        <form action="public/tela_pratos.php" method="POST">

            <label for="Usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">

            <br>

            <label for="Email">Email:</label>
            <input type="email" name="email">

            <br>

          <a href="public/tela_pratos.php">
                <button type="submit">Cadastrar</button>
                </a>
      

        </form>
    </main>

    <footer>
    </footer>

</body>

</html>