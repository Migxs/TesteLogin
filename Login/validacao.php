<?php

session_start();
require_once("./conexao/banco.php");

$nome   = $_REQUEST['username'];
$senha  = $_REQUEST['password'];

$sql = "SELECT nome, senha from usuarios where nome = '$nome'  and senha = '$senha'";

$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;
$total = mysqli_num_rows($query);

if ($total == 1) {
    $dados = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id']     = $dados['id'];
    $_SESSION["nome"]   = $dados['nome'];
    $_SESSION["senha"]  = $senha;
    $_SESSION["mensagem"] = "Logado com sucesso!";
    header("Location: sucesso.html");
} else {
    $_SESSION["mensagem"] = "Erro no login!";
    header("Location: erro.html");
}

?> 
