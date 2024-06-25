import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // Add this line

export default defineConfig({
  plugins: [
    vue(),
    laravel({
      input: 'resources/js/app.js',
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js')
    }
  }
});
