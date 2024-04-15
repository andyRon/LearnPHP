import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


Vue.component('welcome-component', require('./components/WelcomeComponent.vue'));
Vue.component('fileupload-component', require('./components/FileUploadComponent.vue'));
const app = new Vue({
    el: '#app'
});
