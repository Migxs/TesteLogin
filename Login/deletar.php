<?php 
require_once("./conexao/banco.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = '$id'";
mysqli_query($con, $sql);

header("Location: ./menu.php");
die();
?>