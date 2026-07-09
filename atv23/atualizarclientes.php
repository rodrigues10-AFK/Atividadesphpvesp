<<?php 
include "banco.php";
$id= $_POST ['id'];
$nome = $_POST ['nome'];
$idade = $_POST ['idade']; 
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$cidade = $_POST ['cidade'];

$sql = "UPDATE form 
SET
nome='$nome', 
idade='$idade', 
email='$email', 
telefone='$telefone', 
cidade='$cidade' 
WHERE id=$id";

 if ($conexao->query($sql)) {
    header("Location: listacliente1.php");
    
    exit();
    
    } 
    else {
        echo "Erro ao atualizar o cliente: ";
    }
?>