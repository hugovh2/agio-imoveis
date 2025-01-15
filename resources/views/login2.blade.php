<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-[#FF4D4D] via-white to-orange-500 h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <div class="text-center">
            <img src="https://via.placeholder.com/80" alt="Logo" class="mx-auto mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Bem-vindo de volta!</h1>
            <p class="text-gray-600 text-sm">Acesse sua conta para continuar.</p>
        </div>
        <form class="mt-6">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-[#FF4D4D] focus:outline-none">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-[#FF4D4D] focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-[#FF4D4D] text-white py-2 rounded-lg hover:bg-red-600 transition">
                <i class="fas fa-sign-in-alt"></i> Entrar
            </button>
        </form>
        <div class="flex items-center justify-between my-4">
            <hr class="w-full border-gray-300">
            <span class="px-4 text-gray-500 text-sm">ou</span>
            <hr class="w-full border-gray-300">
        </div>
        <div class="flex justify-center space-x-4">
            <button class="p-2 bg-[#FF4D4D] text-white rounded-full shadow hover:bg-red-600 transition">
                <i class="fab fa-google"></i>
            </button>
            <button class="p-2 bg-[#FF4D4D] text-white rounded-full shadow hover:bg-red-600 transition">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button class="p-2 bg-[#FF4D4D] text-white rounded-full shadow hover:bg-red-600 transition">
                <i class="fab fa-twitter"></i>
            </button>
        </div>
        <p class="text-center text-sm text-gray-600 mt-4">
            Não tem uma conta? <a href="/registro" class="text-[#FF4D4D] font-medium hover:underline">Registre-se</a>
        </p>
    </div>
</body>
</html>
