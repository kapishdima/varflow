import { defineConfig } from "vite";

import laravel from "laravel-vite-plugin";

export default defineConfig({
    resolve: {
        alias: {
            styles: "resources/sass",
        },
    },
    plugins: [
        laravel({
            input: ["resources/js/front/app.js", "resources/sass/app.scss"],
            refresh: true,
            buildDirectory: "build/front",
        }),
    ],
});
