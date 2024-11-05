<?php
include 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST ['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO plano (pla_nome, pla_descrição, pla_valor) VALUES ('$nome', '$descricao', '$valor')";

    if (mysqli_query($conn, $sql)) {
        header("Location: plano.php?message=Plano cadastrado com sucesso!");
        exit();
    } else {
        echo "Erro ao inserir plano: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
