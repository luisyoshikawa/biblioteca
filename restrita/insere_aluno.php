<?php
    include'../conecta.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = $_POST['select'];

    $consulta = $conexao -> prepare("INSERT INTO alunos(nome, email, tel, celular, dataNascimento, turma) values ('$nome', '$email', '$telefone', '$celular', '$nascimento', '$turma')");

    $consulta -> execute();

    header('Location: index.php');
?>