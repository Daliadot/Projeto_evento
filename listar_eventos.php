<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<title>Listar Eventos</title>
</head>
<body>
    <h2>Lista de Todos os Eventos</h2>

<?php
require 'conexao.php';

$sql = "SELECT * FROM eventos ORDER BY Data_Evento";
$stmt = $pdo->query($sql);
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($eventos) {
    foreach ($eventos as $evento) {
        echo "ID: " . $evento['Id_Evento'] . "<br>";
        echo "Nome: " . $evento['Nome_Evento'] . "<br>";
        echo "Data: " . $evento['Data_Evento'] . "<br>";
        echo "Hora de Início: " . $evento['Hora_Inicio'] . "<br>";
        echo "Hora de Fim: " . $evento['Hora_Fim'] . "<br>";
        echo "Descrição: " . $evento['Desc_Evento'] . "<br>";
        echo "Local: " . $evento['Local_Evento'] . "<br>";
        echo "Responsável: " . $evento['Resp_Evento'] . "<br><br>";
    }
} else {
    echo "Nenhum evento encontrado!";
}
?>
</body>
</html>
