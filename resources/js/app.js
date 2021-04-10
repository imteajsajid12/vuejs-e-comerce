/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import Vuex from 'vuex'
//vuex
Vue.use(Vuex)
const store = new Vuex.Store({
  state: {
        meassage: 'hello dear',
      user:{}
    },
    getters:
    {
        getMessage(state)
        {
            return state.meassage

        },
        getuser(state) {
            return state.user
        }
    },
  mutations: {
      SET_USER(state, data) {
          state.user=data
}
  }
})

//end

window.Vue = require('vue').default;
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import App from './components/home.vue'
import shop from './components/shop.vue'
import nav from './components/nav.vue'
import card from './components/card.vue'
import login from './components/login.vue'
import contact from './components/contruct.vue'
import about from './components/about.vue'
import detalse from './components/detalse.vue'
import chakeout from './components/chakeout.vue'
import admin from './components/admin.vue'
// const routes = [
//     { path: '/', component: require('./components/ExampleComponent.vue') },
//     { path: '/login', component: require('./components/home.vue') }
//   ]
const router = new VueRouter({
    mode: 'history',
    routes: [
           { path: '/', name: 'home', component: App},
           { path: '/home', name: 'home', component: App},
           { path: '/shop', name: 'shop', component: shop},
           { path: '/cart', name: 'card', component:card, },
           { path: '/login', name: 'login', component: login},
           { path: '/contact', name: 'home', component:contact },
           { path: '/about', name: 'home', component:about,
           beforeEnter: (to, form, next) =>{
            axios.get(`api/auth`).then(response => {
                            next();
                        }).catch(error => {
                            router.push('/login');
                        })} },
        { path: '/deatelse/:id', name: 'deatelse', component: detalse },
            { path: '/chakeout', name: 'chakeout', component: chakeout},

           { path: '/admin', name: 'admin', component: admin},
    ],

});



// <example-component></example-component>

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//notifacation
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
    position: 'top right',
    showDuration: 1000,
    timeOut: 3000,

    progressBar:true,

    showMethod:'fadeIn',

}
Vue.use(CxltToastr, toastrConfigs)

//end


// const app = new Vue({
//     el: '#app',
//     router

// });

const app = new Vue({
    data() {
        return {
            user: ''
        }
    },
    router,
     store,
  }).$mount('#app')
