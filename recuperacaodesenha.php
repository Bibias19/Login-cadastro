<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="./css/stylerec.css">
    <script>
        function redirect() {
            window.location.href = "login.php";
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Recuperar Senha</h1>
        <p>Digite sua nova senha!</p>
        <form>
            <input name="fullname" type="text" placeholder="Nova senha">
            <input name="fullname" type="text" placeholder="Confirme senha">
            <button type="button" onclick="redirect()">Salvar</button>
        </form>
    </div>
</body>
</html>