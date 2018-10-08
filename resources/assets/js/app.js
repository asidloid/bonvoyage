//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });
require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));

Vue.component('data-component', require('./components/DataComponent.vue'));
Vue.component('pagination', require('laravel-vue-pagination'));
 Vue.component('demo', require('./components/SmenaComponent.vue'));
Vue.component('bloki', require('./components/BlokiComponent.vue'));

Vue.component('korsina', require('./components/KorsinaComponent.vue'));
Vue.component('schetkorsina', require('./components/SchetkorsinaComponent.vue'));
Vue.component('filtrtreck', require('./components/FiltrtreckComponent.vue'));

const app = new Vue({
    el: '#app'
});

// const demo = new Vue({
//     el: '#demo',
//     data: {
//         show: true
//     }
// })

// const demo = new Vue({
//     el: '#demo'
// })

