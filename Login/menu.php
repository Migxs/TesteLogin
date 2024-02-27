<?php
require_once("./conexao/banco.php");

$sql = "SELECT id, nome FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./css/style-menu.css">
</head>
<body>
    <div class="container">
        <div class="adicionar">
            <h3>Cadastrar Login</h3>
            <form method="post" action="cadastrar.php">
                <input type="text" placeholder="Nome" id="nome" name="name" required>
                <br><br>
                <input type="password" placeholder="Senha" id="senha" name="password" required>
                <br><br>
                <button class="but-ad" type="submit" name="submit">Adicionar</button>
            </form>
        </div>

        <div class="lista">
            <h3>Lista de Usuários</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($query->num_rows > 0){
                            while($row = $query->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nome"] . "</td>";
                                echo    "<td>
                                            <button> <a href='./deletar.php?id=" . $row["id"]. "'> Deletar </a> </button> 
                                            <button> <a href='./menu-atualizar.php?id=" . $row["id"]. "'> Atualizar </a> </button>
                                        </td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        <div>
    </div>
</body>
</html>