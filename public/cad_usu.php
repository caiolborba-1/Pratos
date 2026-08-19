<?php
 include "../infra/conexao.php";

?>
            
            <h2>Pratos cadastrados</h2>

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