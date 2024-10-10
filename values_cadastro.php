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
    // Captura os dados do formulário
    $codigo = $_POST['codigo'];
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];
    $hr_inicio_evento = $_POST['hr_inicio_evento'];
    $hr_fim_evento = $_POST['hr_fim_evento'];
    $desc_evento = $_POST['desc_evento'];
    $local_evento = $_POST['local_evento'];
    $resp_evento = $_POST['resp_evento'];

    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO eventos (Id_Evento, Nome_Evento, Data_Evento, Hora_Inicio, Hora_Fim, Desc_Evento, Local_Evento, Resp_Evento) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "isssssss", $codigo, $nome_evento, $data_evento, $hr_inicio_evento, $hr_fim_evento, $desc_evento, $local_evento, $resp_evento);

    // Executa a consulta de inserção
    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Novo evento adicionado com sucesso!</p>";
    } else {
        echo "<p>Erro ao adicionar evento: " . mysqli_stmt_error($stmt) . "</p>";
    }

    // Fecha a declaração de inserção
    mysqli_stmt_close($stmt);
}

// Consulta para recuperar os dados
$sql = "SELECT * FROM eventos";
$resultado = mysqli_query($conexao, $sql);

// Exibe os dados em uma tabela
if (mysqli_num_rows($resultado) > 0) {
    echo "<h2>Lista de Eventos</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Código</th><th>Nome do evento</th><th>Data</th><th>Horário de Início</th><th>Horário de Fim</th><th>Descrição</th><th>Local</th><th>Responsável</th></tr>";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>{$linha['Id_Evento']}</td>";
        echo "<td>{$linha['Nome_Evento']}</td>";
        echo "<td>{$linha['Data_Evento']}</td>";
        echo "<td>{$linha['Hora_Inicio']}</td>";
        echo "<td>{$linha['Hora_Fim']}</td>";
        echo "<td>{$linha['Desc_Evento']}</td>";
        echo "<td>{$linha['Local_Evento']}</td>";
        echo "<td>{$linha['Resp_Evento']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum evento encontrado.</p>";
}

// Fecha a conexão
mysqli_close($conexao);
?>
