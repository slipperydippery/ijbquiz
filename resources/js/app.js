/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'core-js/stable'
import 'regenerator-runtime/runtime'
import 'intersection-observer' // Optional

window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Quiz Components
Vue.component('location-component', require('./components/LocationComponent.vue').default);
Vue.component('locationtype-component', require('./components/LocationtypeComponent.vue').default);
Vue.component('employeecount-component', require('./components/EmployeecountComponent.vue').default);
Vue.component('employeeorigin-component', require('./components/EmployeeOriginComponent.vue').default);
Vue.component('employeemobility-component', require('./components/EmployeemobilityComponent.vue').default);
Vue.component('inhousemobility-component', require('./components/InhousemobilityComponent.vue').default);
Vue.component('electricmobility-component', require('./components/ElectricmobilityComponent.vue').default);

// Components
Vue.component('progress-bar', require('./components/ProgressBar.vue').default);

// Admin
Vue.component('manage-measures', require('./components/ManageMeasures.vue').default);
Vue.component('create-measure', require('./components/CreateMeasure.vue').default);
Vue.component('edit-measure', require('./components/EditMeasure.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
