<?php

include "../infra/conexao.php";

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
        <h1>Pratos</h1>
    </header>

    <main>

        <h2>Adicione um novo Prato!</h2>

        <form action="public/cadastrar.php" method="POST">

            <label for="Nome">Nome:</label>
            <input type="text" name="Nome" id="Nome">

            <br>

            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco">

            <br>

            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao">

            <br>

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria">

            <br>

            <button type="submit">Cadastrar</button>

        </form>


            </table>

<br>
 <br>
            <h2>Pratos cadastrados</h2>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Categoria</th>

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