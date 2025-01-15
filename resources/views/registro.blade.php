<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite(['resources/css/cadastro.css', 'resources/js/agio.js'])
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="title">Crie seu Perfil</h1>
            <p class="subtitle">Insira seus dados para criar sua conta</p>
                <form action="{{ route('register.store') }}" method="POST">

                @csrf
                <div class="input-group">
                    <label for="user-type">Tipo de Usuário</label>
                    <select id="user-type" name="user_type" required>
                        <option value="">Selecionar</option>
                        <option value="cpf">Pessoa Física (CPF)</option>
                        <option value="cnpj">Pessoa Jurídica (CNPJ)</option>
                    </select>
                </div>

                <!-- Campos básicos -->
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Use de 6 a 20 caracteres" required>
                </div>

                <!-- Campos de CPF -->
                <div id="cpf-fields" style="display: none;">
                    <div class="input-group">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
                    </div>
                    <div class="input-group">
                        <label for="nome_completo">Nome Completo</label>
                        <input type="text" id="nome_completo" name="nome_completo" placeholder="Digite seu nome completo">
                    </div>
                    <div class="input-group">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" id="data_nascimento" name="data_nascimento">
                    </div>
                </div>

                <!-- Campos de CNPJ -->
                <div id="cnpj-fields" style="display: none;">
                    <div class="input-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" name="cnpj" placeholder="Digite seu CNPJ">
                    </div>
                    <div class="input-group">
                        <label for="company-name">Razão Social</label>
                        <input type="text" id="company-name" name="company_name" placeholder="Digite a razão social">
                    </div>
                    <div class="input-group">
                        <label for="trade-name">Nome Fantasia</label>
                        <input type="text" id="trade-name" name="trade_name" placeholder="Digite o nome fantasia">
                    </div>
                    <div class="input-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Digite o telefone">
                    </div>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Aceito os <a href="#">Termos e Condições</a></label>
                </div>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('user-type').addEventListener('change', function () {
            const userType = this.value;
            const cpfFields = document.getElementById('cpf-fields');
            const cnpjFields = document.getElementById('cnpj-fields');

            if (userType === 'cpf') {
                cpfFields.style.display = 'block';
                cnpjFields.style.display = 'none';
            } else if (userType === 'cnpj') {
                cnpjFields.style.display = 'block';
                cpfFields.style.display = 'none';
            } else {
                cpfFields.style.display = 'none';
                cnpjFields.style.display = 'none';
            }
        });
    </script>
</body>

</html>
