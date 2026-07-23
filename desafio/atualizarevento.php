<?php
include "banco.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$sql = "UPDATE eventos SET
    nome_evento = '$nome',
    data_evento = '$data',
    horario = '$horario',
    local_evento = '$local',
    cidade = '$cidade',
    quantidade_de_vagas = '$vagas'
WHERE id = '$id'";

if ($conexao->query($sql)) {
    header("Location: listareventos.php");
    exit();
} else {
    echo "Erro ao atualizar o evento: " . $conexao->error;
}

$conexao->close();
?>