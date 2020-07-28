<?php

    include'../conecta.php';

    $ra = $_GET['ra'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $dataNascimento = $_POST['nascimento'];

    $consulta = $conexao -> prepare("UPDATE aluno SET nome='$nome', email='$email', tel='$telefone', celular='$celular', dataNascimento='$dataNascimento' where ra = '$ra'");
    
    $consulta -> execute();

    header('Location: index.php');
?>