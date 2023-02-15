import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/scss/auth/auth.scss",
                "resources/scss/home/index.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
