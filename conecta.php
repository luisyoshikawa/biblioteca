<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "biblioteca";

    //criando conecção
    $conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

    //testando se está conectado
    if ($conexao -> connect_error){
        echo("DEU RUIM!");
    }
    else{
        //echo("CONECTADO!");
    }
?>