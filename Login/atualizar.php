<?php
require_once("./conexao/banco.php");

$id = $_GET["id"];
$nome = $_REQUEST["name"];
$senha = $_REQUEST["password"];

$sql = "update usuarios set nome = '$nome', senha = '$senha' where id = '$id'";
$query = mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location:menu.php")
?>