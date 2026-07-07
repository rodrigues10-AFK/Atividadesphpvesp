<?php 
//subtração  
include "conexao.php";


$num1=9;
$num2=5;

$resultado=$num1-$num2;

//linguagem sql

$sql="INSERT INTO calculo19(numero1 ,numero2, resultado)
VALUE($num1, $num2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvo!";
}else {
    echo "<br> Erro ao salvar...";
}

?>