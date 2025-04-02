import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0', // Permite que Vite sea accesible desde cualquier IP en la red local
        port: 5173,      // Usa el puerto de Vite (debe coincidir con el que muestra la terminal)
        strictPort: true,
        hmr: {
            host: '192.168.1.65', // Reemplázalo con tu IP local
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
