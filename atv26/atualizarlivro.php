<<?php 
include "banco.php";
$id= $_POST ['id'];
$titulo = $_POST['nome'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$publicacao = $_POST['publicacao'];
$paginas = $_POST['paginas'];

$sql = "UPDATE livros 
SET
titulo='$titulo', 
autor='$autor', 
editora='$editora', 
publicacao='$publicacao', 
paginas='$paginas' 
WHERE id=$id";

 if ($conexao->query($sql)) {
    header("Location: listalivro.php");
    
    exit();
    
    } 
    else {
        echo "Erro ao atualizar o cliente: ";
    }
?>