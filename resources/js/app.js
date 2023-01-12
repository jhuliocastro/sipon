import '../css/app.css'
import 'vue-toast-notification/dist/theme-sugar.css';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import ToastPlugin from 'vue-toast-notification';

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
        .use(ToastPlugin, {
            position: 'top-right',
            duration: 5000
        })
      .use(ZiggyVue, Ziggy)
      .mount(el)
  },
})

InertiaProgress.init()
