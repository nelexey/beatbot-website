import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import {viteStaticCopy} from 'vite-plugin-static-copy'
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css',
                'resources/css/header.css',
                'resources/css/error.css',
                'resources/css/auth.css',
                'resources/css/offer.css',
                'resources/css/adaptation.css',
                'resources/css/home.css',

                'resources/js/script.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/img',
                    dest: ''
                },
                {
                    src: 'resources/audio',
                    dest: ''
                },
            ]
        }),
    ],
});
