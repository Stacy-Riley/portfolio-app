import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',   // Tailwind for the frontend
                'resources/js/app.js',     // JavaScript for the frontend
            ],
            refresh: true,
        }),
        tailwindcss(), // Make sure to use Tailwind
    ],
});
