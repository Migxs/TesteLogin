<?php
require_once("./conexao/banco.php");

$id = $_GET["id"];
$sql = "SELECT id, nome, senha FROM usuarios where id = '$id'";
$query = mysqli_query($con, $sql);
$dados = $query->fetch_assoc();
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
        <div class="atualizar">
            <h3>Atualizar Login</h3>
            <form method="post" action="./atualizar.php?id=<?php echo $dados['id']; ?>">
                <input type="text" value="<?php echo $dados['nome']; ?>" placeholder="Nome" id="nome" name="name" required>
                <br><br>
                <input type="password" value="<?php echo $dados['senha']; ?>" placeholder="Senha" id="senha" name="password" required>
                <br><br>
                <button class="but" type="submit" name="submit">Atualizar</button>
            </form>
        </div>
    </div>
</body>
</html>