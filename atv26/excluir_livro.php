<?php 
include "banco.php";
$id=$_GET['id'];

$sql = "DELETE FROM livros WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listalivro.php");
    
    exit();
    }
?>