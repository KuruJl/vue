import '../css/app.css';
import './bootstrap';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { createApp, h } from 'vue';
import { Link } from '@inertiajs/vue3';

// После создания app

createInertiaApp({
  resolve: async (name) => {
    const page = await import(`./Pages/${name}.vue`);
    return page;
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({
      render: () => h(App, props)
    });
    
    // Регистрируем только Link (остальные компоненты импортируем локально)
    app.component('Link', Link);
    
    app.use(plugin);
    app.mount(el);
  }
});