import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
const path = require("path"); // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            // edit the first value of the array input to point to our new sass files and folder.
            input: [
                "resources/scss/back.scss",
                "resources/js/back.js",
                "resources/scss/front.scss",
                "resources/js/front.js",
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    // Add resolve object and aliases
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            "~resources": "/resources/",
        },
    },
});
