<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="stylerec.css">
</head>
<body>
    <div class="container">
        <h1>Recuperar Senha</h1>
        <p>Digite seu usuário</p>
        <form>
            <input type="text" placeholder="Usuário">
            <button type="button" onclick="redirect()">Código</a></button>
        </form>
    </div>
        <script>
            function redirect() {
                window.location.href = "codigo.php";
            }
        </script>
    </body>
    </html>