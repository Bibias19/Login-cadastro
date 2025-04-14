<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="./css/stylerec.css">
</head>
<body>
    <div class="container">
        <h1>Recuperar Senha</h1>
        <p>Digite seu usuário</p>
        <form>
            <input name="fullname"  type="text" placeholder="Usuário">
            <button type="button" onclick="redirect()">Código</a></button>
        </form>
    </div>
        <script>
            function redirect() {
<<<<<<<< HEAD:VIEW/usuario.php
                window.location.href = "./codigo.php";
========
                window.location.href = "codigo.php";
>>>>>>>> 9583ce44b238d53f08661c201d72721ed7deceb7:usuario.php
            }
        </script>
    </body>
    </html>