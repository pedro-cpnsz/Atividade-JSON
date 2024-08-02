<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Tarefas</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="buscarTarefas()">
    <button onclick="buscarTarefas()">Buscar tarefas</button>
    
    <table class="zebra">
        <thead>
            <tr>
                <td id="userId">User ID</td>
                <td id="id">ID</td>
                <td>Tarefas</td>
                <td>Finalizada</td>
            </tr>
        </thead>
        <tbody id="tablebody">
        </tbody>
    </table>
</body>
</html>