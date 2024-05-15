import './bootstrap';

window.Vue = require('vue');
import { vueBaberrage } from 'vue-baberrage';
Vue.use(vueBaberrage);


// Vue.component('tasks-component', import('./components/TasksComponent.vue').default);
Vue.component('danmu-component', import('./components/DanmuComponent.vue').default);
