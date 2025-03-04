<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ágio Imóveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../js/agio.js"></script>
    @vite(['resources/css/home.css', 'resources/js/agio.js'])

</head>

<body>
    <header>
        <nav class="navbar d-flex justify-content-between align-items-center">
            <div class="navbar-logo d-flex align-items-center">
                <span>Ágio Imóveis</span>
            </div>

            <div class="navbar-links">
                <a href="#">Ágios</a>
                <a href="#">Explorar</a>
                <a href="#">Planos</a>
                <a href="#">Serviços</a>
            </div>

            <div class="navbar-buttons">
                <button class="button button-start" onclick="window.location.href='login'">Entrar</button>
                <button class="button button-start">Anunciar</button>
            </div>
        </nav>
    </header>

    <div class="hero-section d-flex flex-column align-items-center">
        <h1 class="mb-4">Casa Nova, Vida Nova</h1>
        <div class="filter-container">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Alugar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Imóvel Novo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Leilão</a>
                </li>
            </ul>
            <div class="filter-box mt-3">
                <select>
                    <option>Apartamento (Todos)</option>
                    <option>Casa</option>
                    <option>Terreno</option>
                </select>
                <input type="text" placeholder="Digite cidades ou bairros ou características (ex: piscina)">
                <button>Buscar</button>
            </div>
        </div>
    </div>

    <section id="imoveis" class="imoveis-section">
        <h1 class="title">Mais imóveis semelhantes às que você viu</h1>
        <div class="imoveis-cards">
            <div class="card">
                <img src="https://images.pexels.com/photos/30108621/pexels-photo-30108621.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Imagem Imóvel 1" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Imóvel Novo · Comercial</h3>
                    <p class="card-price">De R$ 528.000</p>
                    <p class="card-location">SGAN 601, Lote H<br>Asa Norte, Brasília</p>
                    <div class="card-info">
                        <span class="status">Mude já</span>
                        <span class="date">Imediata</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/30092167/pexels-photo-30092167/free-photo-of-arquitetura-historica-europeia-com-fachada-ornamentada.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Imagem Imóvel 2" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Imóvel Novo · Comercial</h3>
                    <p class="card-price">De R$ 1.051.035</p>
                    <p class="card-location">CLNW 04/05 BLOCO B<br>Noroeste, Brasília</p>
                    <div class="card-info">
                        <span class="status">Em Obra</span>
                        <span class="date">Dezembro 2026</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/30092167/pexels-photo-30092167/free-photo-of-arquitetura-historica-europeia-com-fachada-ornamentada.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Imagem Imóvel 3" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Imóvel Novo · Apartamento</h3>
                    <p class="card-price">Consultar preço</p>
                    <p class="card-location">Avenida Flamboyant, Q. 106, 14<br>Águas Claras, Brasília</p>
                    <div class="card-info">
                        <span class="status">Em Obra</span>
                        <span class="date">Julho 2027</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/30092167/pexels-photo-30092167/free-photo-of-arquitetura-historica-europeia-com-fachada-ornamentada.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Imagem Imóvel 4" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Imóvel Novo · Apartamento</h3>
                    <p class="card-price">Consultar preço</p>
                    <p class="card-location">SQNW 304 Projeção A<br>Noroeste, Brasília</p>
                    <div class="card-info">
                        <span class="status">Na planta</span>
                        <span class="date">Imediata</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/30092167/pexels-photo-30092167/free-photo-of-arquitetura-historica-europeia-com-fachada-ornamentada.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Imagem Imóvel 4" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Imóvel Novo · Apartamento</h3>
                    <p class="card-price">Consultar preço</p>
                    <p class="card-location">SQNW 304 Projeção A<br>Noroeste, Brasília</p>
                    <div class="card-info">
                        <span class="status">Na planta</span>
                        <span class="date">Imediata</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Sugestões de imóveis -->
        <section class="suggestions">
            <h2>Sugestões de imóveis que você vai amar</h2>
            <div class="buttons">
                <button>Apartamentos em alta mais procurados</button>
                <button>Imóveis que acabaram de chegar</button>
                <button>Oportunidade imperdível</button>
                <button>Novos apartamentos para alugar</button>
            </div>
        </section>

        <!-- Etapas do processo -->
        <section class="steps">
            <h2>Acompanhamos você em cada etapa do processo</h2>
            <div class="step-container">
                <div class="step">
                    <!-- <img src="" alt="Navegue com facilidade"> -->
                    <h3>Navegue com facilidade</h3>
                    <p>Filtros e mapas projetados para tornar sua experiência mais simples e eficiente.</p>
                </div>
                <div class="step">
                    <!-- <img src="" alt="Acesso seguro e prático"> -->
                    <h3>Acesso seguro e prático</h3>
                    <p>Gerencie suas notificações com facilidade e segurança em sua seção principal.</p>
                </div>
                <div class="step">
                    <!-- <img src="" alt="Variedade de anunciantes"> -->
                    <h3>Variedade de anunciantes</h3>
                    <p>Corretores e proprietários diretos de todo o Brasil com as melhores opções para você encontrar o imóvel ideal.</p>
                </div>
                <div class="step">
                    <!-- <img src="" alt="Sua escolha de confiança"> -->
                    <h3>Sua escolha de confiança</h3>
                    <p>Com 25 anos de experiência no mercado, estamos prontos para ajudar você a encontrar seu novo lar.</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-light text-dark text-center py-4">
        <div class="container">
            <p>&copy; 2025 Ágio Imóveis. Todos os direitos reservados.</p>
            <p>
                <a href="#" class="text-dark me-4">Termos de Uso</a>
                <a href="#" class="text-dark">Política de Privacidade</a>
            </p>
            <p>Siga-nos:</p>
            <div>
                <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-dark me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
