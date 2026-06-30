<?php 
//inclui o arquivo responsavel pela conexao 
include "conexao.php";


$num1=84;
$num2=50;
$num3=10;

$resultado=$num1+$num2+$num3;

//linguagem sql

$sql="INSERT INTO calculo17(numero1 ,numero2 ,numero3 , resultado)
VALUE($num1, $num2 ,$num3, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar...";
}

?>