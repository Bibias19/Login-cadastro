<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
<script>
        function redirect() {
            window.location.href = "login.php";
        }
    </script>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form>
            <input type="text" placeholder="Nome completo" >
            <input type="text" placeholder="Nome de usuário" >
            <input type="email" placeholder="Email" >
            <input type="number" placeholder="Idade" min="1" >
            <select >
                <option value="" disabled selected>Selecione seu gênero</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
                <option value="nao_informar">Prefiro não informar</option>
            </select>
            <input type="password" placeholder="Senha" >
            <button type="button" onclick="redirect()">Cadastrar</button>
        </form>
    </div>
    
</body>
</html>
