require('./bootstrap');

window.Vue = require('vue');

Vue.component('music-search' , require('./components/Search.vue').default);
Vue.component('home-dashboard' , require('./components/HomeDashboard.vue').default);
Vue.component('dynamic-dashboard' , require('./components/DynamicDashboard.vue').default);


var app = new Vue({
    el : '#app' , 
    
});

console.log("Testing watch");