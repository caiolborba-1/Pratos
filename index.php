<?php

include "infra/conexao.php";

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
            <input type="text" name="Usuario" id="Usuario">

            <br>

            <label for="Email">Email:</label>
            <input type="email" name="Email">

            <br>

          <a href="../Pratos/public/tela_pratos.php">
                <button type="submit">Cadastrar</button>
                </a>
      

        </form>
    </main>

    <footer>
    </footer>

</body>

</html>