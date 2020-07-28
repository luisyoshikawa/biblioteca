<?php
    include'../conecta.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $pagina = $_POST['paginas'];
    $genero = $_POST['select'];

    $consulta = $conexao -> prepare("INSERT INTO livros(titulo, autor, editora, paginas, genero) values ('$titulo', '$autor', '$editora', '$paginas', '$genero')");

    $consulta -> execute();

    header('Location: index.php');
?>