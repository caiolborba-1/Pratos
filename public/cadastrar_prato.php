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

$Pratos = mysqli_query($conexao, "SELECT * FROM pratos");



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

    <header>
        <h1>Usuario</h1>
    </header>

    <main>
        <form action="public/cadastrar.php" method="POST">

<label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome">
            <br>
            <button type="submit">Cadastrar</button>

        </form>
</table>

<br>
<br>
            <table>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>

                </tr>

                <?php while ($Prato = mysqli_fetch_assoc($Pratos)) { ?>

                    <tr>

                        <td><?php echo $Prato["id"]; ?></td>

                        <td><?php echo $Prato["Nome"]; ?></td>

                        <td><?php echo $Prato["preco"]; ?></td>

                        <td><?php echo $Prato["descricao"]; ?></td>

                        <td><?php echo $Prato["categoria"]; ?></td>

                        <td>
                            <a href="public/editar.php?id=<?php echo $Prato["id"]; ?>">
                                Editar
                            </a>

                            <a href="public/excluir.php?id=<?php echo $Prato["id"]; ?>">
                                Excluir
                            </a>
                        </td>

                    </tr>

                <?php } ?>

            </table>

    </main>

    <footer>
    </footer>

</body>

</html>