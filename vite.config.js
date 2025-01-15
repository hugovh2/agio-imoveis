import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/registro.css',
                'resources/css/agio-imoveis.css',
                'resources/css/mais-imoveis.css',
                'resources/css/agilidade.css',
                'resources/css/casas.css',
                'resources/css/home.css',
                'resources/css/cadastro.css',
                'resources/js/app.js',
                'resources/js/login.js',
                'resources/js/agio.js',
            ],
            refresh: true,
        }),
    ],
});
