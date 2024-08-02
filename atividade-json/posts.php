<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Posts</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="buscarPosts()">
    <button onclick="buscarPosts()">Buscar posts</button>
    
    <table class="zebra">
        <thead>
            <tr>
                <td id="userId">User ID</td>
                <td id="id">ID</td>
                <td>Título</td>
                <td>Mensagem</td>
            </tr>
        </thead>
        <tbody id="tablebody">
        </tbody>
    </table>
</body>
</html>