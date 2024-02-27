<?php

$con = mysqli_connect("localhost", "root", "", "meu_banco_de_dados");

if (mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_erro();
} else {
    mysqli_select_db($con, "meu_banco_de_dados");
}

?>