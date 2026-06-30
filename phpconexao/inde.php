<?php 
//inclui o arquivo responsavel pela conexao 
include "conexao.php";


$num1=84;
$num2=50;

$resultado=$num1+$num2;

//linguagem sql

$sql="INSERT INTO calculo(numero1 ,numero2, resultado)
VALUE($num1, $num2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar...";
}

?>