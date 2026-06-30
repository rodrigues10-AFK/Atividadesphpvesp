<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado da divisão</h1>
    <?php 
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $div=$num1/$num2;
    echo "<p>A divisão dos dois números é: $div</p>";
    $obs=$_POST['message'];
    echo "<p>Observação: $obs</p>";
    
    
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $num3=$_POST['numero3'];
    $mult=$num1*$num2*$num3;
    echo "<p>A multiplicação dos três números é: $mult</p>";
    $obs=$_POST['message'];
    echo "<p>Observação: $obs</p>";
    
    
    ?>

    
</body>
</html>






