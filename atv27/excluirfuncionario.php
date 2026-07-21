<?php 
include "banco.php";
$id=$_GET['id'];

$sql = "DELETE FROM funcionario WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listarfuncionario.php");
    
    exit();
    }
?>