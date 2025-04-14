<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href=". /css/stylerec.css">
</head>
<body>
    <div class="container">
        <h1>Recuperar Senha</h1>
        <p>Digite o código</p>
        <form>
            <input name="fullname" type="text" placeholder="Código">
            <button type="button" onclick="redirect()">Salvar</a></button>
        </form>
        <script>
            function redirect() {
                window.location.href = "recuperacaodesenha.php";
            }
        </script>
      
    </body>
    </html>