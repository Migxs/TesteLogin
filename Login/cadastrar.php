<?php
require_once("./conexao/banco.php");

$nome = $_REQUEST["name"];
$senha = $_REQUEST["password"];

$sql = "insert into usuarios (nome, senha) values ('$nome', '$senha')";
$query = mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location:menu.php")
?>