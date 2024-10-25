<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<title>Cadastrar Evento!</title>
</head>
<body>
    <h2>Cadastrar Novo Evento</h2>
    <form action="cadastrar_evento.php" method="POST">
        Nome do Evento: <input type="text" name="nome_evento" required><br>
        Data do Evento: <input type="date" name="data_evento" required><br>
        Hora de Início: <input type="time" name="hora_inicio" required><br>
        Hora de Fim: <input type="time" name="hora_fim" required><br>
        Descrição: <textarea name="desc_evento" required></textarea><br>
        Local do Evento: <input type="text" name="local_evento" required><br>
        Responsável: <input type="text" name="resp_evento" required><br>
        <div class=but>
        <input type="submit" name="submit" value="Cadastrar">
</div>
    </form>

<?php
if (isset($_POST['submit'])) {
    require 'conexao.php';  // Inclui o arquivo de conexão com o banco de dados

    // Captura os dados do formulário
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fim = $_POST['hora_fim'];
    $desc_evento = $_POST['desc_evento'];
    $local_evento = $_POST['local_evento'];
    $resp_evento = $_POST['resp_evento'];

    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO eventos (Nome_Evento, Data_Evento, Hora_Inicio, Hora_Fim, Desc_Evento, Local_Evento, Resp_Evento) 
            VALUES (:nome_evento, :data_evento, :hora_inicio, :hora_fim, :desc_evento, :local_evento, :resp_evento)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome_evento' => $nome_evento,
        ':data_evento' => $data_evento,
        ':hora_inicio' => $hora_inicio,
        ':hora_fim' => $hora_fim,
        ':desc_evento' => $desc_evento,
        ':local_evento' => $local_evento,
        ':resp_evento' => $resp_evento
    ]);

    echo "Evento cadastrado com sucesso!";
}
?>
</body>
</html>
