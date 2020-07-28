<?php
    include'conecta.php';
    session_start();
    
    $email = $_POST['username'];
    $senha = $_POST['pass'];

    $consulta = "SELECT * FROM aluno where email = '$email' and senha = '$senha'";
    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;
    
    $registro_usuario = mysqli_fetch_assoc($resultado);
    //utilizares $resultado_usuario para criar sessão no php

    if($registros = 1){
        $_SESSION['ra'] = $registro_usuario['ra'];
        $_SESSION['nome'] = $registro_usuario['nome'];
        $_SESSION['email'] = $registro_usuario['email'];

        header('Location: restrita.php');
    }   
    else{
        header('Location: index.html');
    }
?>