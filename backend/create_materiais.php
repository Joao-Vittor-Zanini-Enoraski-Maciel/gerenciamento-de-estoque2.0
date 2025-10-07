<?php

include 'config.php';

$material = $_POST['material'];

$sql = "INSERT INTO material (nome) VALUES (?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('ss', $cor);

if($stmt->execute()){
    echo "<h1> Cor cadastrada com sucesso </h1>";
}else{
    echo "Erro ao cadastrar a cor" . $conexao->error;
}

$stmt->close();
$conexao->close();

?>