<?php
include 'conecta.php';

header("Content-Type: application/json");

$response = ["success" => false];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pla_codigo"])) {
    $id = $_POST["pla_codigo"];

    $sql = "SELECT pla_nome, pla_descricao, pla_valor FROM plano WHERE pla_codigo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response = [
            "success" => true,
            "nome" => $row['pla_nome'],
            "descricao" => $row['pla_descricao'],
            "valor" => $row['pla_valor']
        ];
    }

    $stmt->close();
}

$conn->close();

echo json_encode($response);
?>
