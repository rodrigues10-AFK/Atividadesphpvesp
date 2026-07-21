<?php 
include "banco.php";
$id=$_GET['id'];

$sql = "DELETE FROM form WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listaral.php");
    
    exit();
    }
?>