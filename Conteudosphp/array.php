<?php 
$reprovados=0;
$aprovados=0;
$candidatos=[
    (object)["nome"=>"Gustavo","nota"=>50],
    (object)["nome"=>"Gerson","nota"=>100],
    (object)["nome"=>"Rafael","nota"=>90],
    (object)["nome"=>"Rafael","nota"=>69],
    (object)["nome"=>"Rafael","nota"=>65],
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >= 70) {
        $aprovados++;
    }else {
        $reprovados++;
    }
}
echo"O total de candidatos aprovados é: $aprovados";
echo"O total de candidatos reprovados é: $reprovados";



?>