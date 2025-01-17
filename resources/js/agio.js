import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css"; // Importa os estilos do Flatpickr

// Inicializa o Flatpickr nos campos de data
flatpickr("#data_nascimento", {
    dateFormat: "Y-m-d", // Formato de data: Ano-Mês-Dia
    locale: "pt", // Define o idioma para português
    maxDate: "today", // Impede selecionar datas futuras
    altInput: true, // Exibe um campo alternativo para a data no formato legível
    altFormat: "d/m/Y", // Formato alternativo de data
});



document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os nav links
    const navLinks = document.querySelectorAll('.nav-link');
    const heroSection = document.querySelector('.hero-section');

    // Define as URLs das imagens correspondentes a cada link
    const images = {
        'Comprar': 'https://objectstorage.sa-saopaulo-1.oraclecloud.com/n/grq6lwb4htd1/b/tecimob-production/o/media/95f2bf47-1b33-47ff-8a3e-351888d06d70/settings/main-images/234f8eb1-01b2-4efe-bd19-d745dd744be6.jpg',
        'Alugar': 'https://images.pexels.com/photos/30099429/pexels-photo-30099429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'Imóvel Novo': 'https://images.pexels.com/photos/30092167/pexels-photo-30092167/free-photo-of-arquitetura-historica-europeia-com-fachada-ornamentada.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'Leilão': 'https://images.pexels.com/photos/30108621/pexels-photo-30108621.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    };

    // Adiciona um evento de clique a cada link
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Evita o comportamento padrão de navegação
            const linkText = link.textContent.trim();

            // Muda a imagem de fundo da seção hero
            if (images[linkText]) {
                heroSection.style.backgroundImage = `url('${images[linkText]}')`;
            }

            // Atualiza a classe ativa
            navLinks.forEach(nav => nav.classList.remove('active'));
            link.classList.add('active');
        });
    });
});


// document.querySelector('.slider-prev').addEventListener('click', function() {
//     document.querySelector('.imoveis-cards').scrollBy({
//         left: -300, // Ajuste o valor conforme necessário
//         behavior: 'smooth'
//     });
// });

// document.querySelector('.slider-next').addEventListener('click', function() {
//     document.querySelector('.imoveis-cards').scrollBy({
//         left: 300, // Ajuste o valor conforme necessário
//         behavior: 'smooth'
//     });
// });

    document.addEventListener('DOMContentLoaded', function() {
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
    });

// Controle de exibição dos campos
