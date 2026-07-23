<?php 
include "banco.php";
$id=$_GET['id'];

$sql = "DELETE FROM eventos WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listareventos.php");
    
    exit();
    }
?>