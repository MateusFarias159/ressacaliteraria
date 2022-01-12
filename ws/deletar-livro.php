<?php
require_once "../model/Livro.php";

echo $_GET["id"];
Livro::deletar($_GET["id"]);

header("Location: ../index.php?msg=Item deletado");