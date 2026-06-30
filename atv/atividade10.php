<?php 
$reprovados=0;
$aprovados=0;
$candidatos=[
    (object)["nome"=>"Gustavo","nota"=>50],
    (object)["nome"=>"Gerson","nota"=>100],
    (object)["nome"=>"Rafael","nota"=>90],
    (object)["nome"=>"Junior","nota"=>69],
    (object)["nome"=>"Lucas","nota"=>65],
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >= 80) {
        $aprovados++;
    }else {
        $reprovados++;
    }
}
echo"O total de candidatos aprovados é: $aprovados <br>";
echo"O total de candidatos reprovados é: $reprovados";


?>