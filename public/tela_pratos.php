<?php

include "infra/conexao.php";
$livros = mysqli_query($conexao, "SELECT * FROM livros");

?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prato</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Pratos</h1>
    </header>
    <main>
        <h2>Adicione um novo Prato!</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="titulo">Nome:</label>
            <input type="text" name="titulo">
            <br>
            <label for="preco">Preço:</label>
            <input type="text" name="preco">
            <br>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Pratos cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                </tr>
                <?php while ($livro = mysqli_fetch_assoc($livros)) { ?>
                    <tr>
                        <td><?php echo $prato["id"] ?></td>
                        <td><?php echo $prato["preco"] ?></td>
                        <td><?php echo $prato["descricao"] ?></td>
                        <td><?php echo $prato["categoria"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $prato["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $prato["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

              <h2>Usuarios Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                
                <?php while ($livro = mysqli_fetch_assoc($livros)) { ?>
                    <tr>
                        <td><?php echo $Usuario["id"] ?></td>
                        <td><?php echo $Usuario["Nome"] ?></td>
                        <td><?php echo $Usuario["Email"] ?></td>
                        
                        <td>
                            <a href="public/editar.php?id=<?php echo $Usuario["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $Usuario["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>