import './bootstrap'; // Memastikan Bootstrap di-load
import { createApp } from 'vue'; // Mengimpor createApp dari Vue
import App from './App.vue'; // Mengimpor komponen App

const app = createApp(App); // Membuat aplikasi Vue
app.mount('#app'); // Memasangkan aplikasi ke elemen dengan id "app"
