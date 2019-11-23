<?php

    $servidor = "hemoesysdb.csg7ks97gmfd.us-east-2.rds.amazonaws.com";
    $usuario = "admin";
    $senha = "";
    $dbname = "hemoesysdb";

    //Criando a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>