import laravel, { refreshPaths } from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    server: {
        hmr: {
            host: 'laravel.test'
        },
        host: 'laravel.test'
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
