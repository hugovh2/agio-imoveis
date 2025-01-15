<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    @vite(['resources/css/login.css', 'resources/js/agio.js'])
</head>
<body>
    <div class="login-container">
        <h1>Olá!</h1>
        <p>Faça login na sua conta e acesse os avisos que você contatou, seus favoritos, pesquisas salvas e muito mais!</p>
        <input type="email" placeholder="Digite seu e-mail">
        <button>Continuar</button>
        <div class="divider"></div>
        <div class="social-login">
            <!-- <img src="https://via.placeholder.com/40" alt="Google">
            <img src="https://via.placeholder.com/40" alt="Facebook">
            <img src="https://via.placeholder.com/40" alt="Apple"> -->
        </div>
        <p class="register">
            É imobiliária ou corretor ou não tem uma conta? <a onclick="window.location.href='registro'">Registre-se</a>
        </p>
    </div>
</body>
</html>
