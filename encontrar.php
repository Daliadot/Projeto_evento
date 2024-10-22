<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$base = "eventos";

// Conexão com o banco de dados
$conexao = mysqli_connect($host, $user, $pass, $base);

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o ID do evento
    $codigo = $_POST['codigo'];

    // Prepara a consulta SQL para buscar o evento pelo ID
    $sql = "SELECT * FROM eventos WHERE Id_Evento = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "i", $codigo);

    // Executa a consulta
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    // Verifica se encontrou algum evento
    if (mysqli_num_rows($resultado) > 0) {
        echo "<center>";
        echo "<h1><u>Informações do Evento</u></h1>";
        echo "<table border='3' height='250' width='1000'>";
        echo "<tr style='font-size:40px; font-weight:500'><th><h2>Código</h2></th><th><h2>Nome do Evento</h2></th><th><h2>Data</h2></th><th><h2>Horário de Início</h2></th><th><h2>Horário de Fim</h2></th><th><h2>Descrição</h2></th><th><h2>Local</h2></th><th><h2>Responsável</h2></th></tr>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td align='center' style='font-size:40px'>{$linha['Id_Evento']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Nome_Evento']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Data_Evento']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Hora_Inicio']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Hora_Fim']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Desc_Evento']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Local_Evento']}</td>";
            echo "<td align='center' style='font-size:40px'>{$linha['Resp_Evento']}</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</center>";
    } else {
        echo "<p>Nenhum evento encontrado com o ID: $codigo.</p>";
    }

    // Fecha a declaração
    mysqli_stmt_close($stmt);
}

// Fecha a conexão
mysqli_close($conexao);
?>
