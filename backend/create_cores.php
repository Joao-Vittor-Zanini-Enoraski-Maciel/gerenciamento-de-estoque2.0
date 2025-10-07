<?php

include 'config.php';

$cor = $_POST['color'];

$sql = "INSERT INTO cores (nome) VALUES (?)";
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