<?php

require_once "../model/Livro.php";

$livro = new Livro();
$livro->setId($_GET["id"]);
$livro->setTitulo($_GET["titulo"]);
$livro->setAutor($_GET["autor"]);
$livro->setGenero($_GET["genero"]);
$livro->setEdicao($_GET["edicao"]);
$livro->setEditora($_GET["editora"]);
$livro->setPaginas($_GET["paginas"]);

print_r($livro);


    if($livro->getId() == ""){
        $livro->salvar();
    }
    else{
        $livro->editar();
    }

    header("Location: ../");

?>