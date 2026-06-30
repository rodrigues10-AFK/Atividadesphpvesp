<?php 
$aprovados=0;
$candidatos=[
    (object)["nome"=>"Gustavo","nota"=>50],
    (object)["nome"=>"Gerson","nota"=>100],
    (object)["nome"=>"Rafael","nota"=>90],
    (object)["nome"=>"Junior","nota"=>65]
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >= 80) {
        $aprovados++;
    }
}
echo"O total de alunos aprovados é: $aprovados";



?>