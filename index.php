<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Compromissos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #333;
        }
        .menu {
            margin-top: 20px;
        }
        .menu a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class= grad>
    <div class= "grade">
    <div class="container">
        <h1>Agenda de Compromissos ata</h1>
        <div class="menu">
            <a href="cadastrar_evento.php">Cadastrar Evento</a>
            <a href="consultar_evento.php">Consultar Evento</a>
            <a href="listar_eventos.php">Listar Todos os Eventos</a>
            <a href="atualizar_evento.php">Atualizar Evento</a>
            <a href="remover_evento.php">Remover Evento</a>
        </div>
    </div>
    </div>
</body>
</html>
