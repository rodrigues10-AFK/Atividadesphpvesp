<?php 
//mult
include "conexao.php";


$num1=10;
$num2=4;


$resultado=$num1*$num2;

//linguagem sql

$sql="INSERT INTO calculo18(numero1 ,numero2, resultado)
VALUE($num1, $num2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados salvo!";
}else {
    echo "<br> Erro ao salvar...";
}

?>