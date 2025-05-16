import '../css/app.css';
import './bootstrap';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { createApp, h } from 'vue';
import { Link } from '@inertiajs/vue3'; // Импортируем Link вместо router-link

// Импорт компонентов
import AppHeader from './Pages/Header.vue';
import AppMain from './Pages/Main.vue';

createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    const app = createApp({
      render: () => h(App, props)
    });
    
    // Регистрируем компоненты глобально
    app.component('AppHeader', AppHeader);
    app.component('AppMain', AppMain);
    app.component('Link', Link); // Регистрируем Link для использования вместо router-link
    
    app.use(plugin);
    app.mount(el);
  }
});