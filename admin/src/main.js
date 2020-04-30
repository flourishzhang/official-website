import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios';
import ElementUI from 'element-ui';
import VueI18n from 'vue-i18n';
import { messages } from './components/common/i18n';
import 'element-ui/lib/theme-chalk/index.css'; // 默认主题
// import '../static/css/theme-green/index.css';       // 浅绿色主题
import './assets/css/icon.css';
import './components/common/directives';
import "babel-polyfill";

Vue.config.productionTip = false
Vue.use(VueI18n);
Vue.use(ElementUI, {
    size: 'small'
});
Vue.prototype.$axios = axios;

const i18n = new VueI18n({
    locale: 'zh',
    messages
})

//使用钩子函数对路由进行权限跳转
router.beforeEach((to, from, next) => {
    const token = sessionStorage.getItem('token')
    const userinfo = sessionStorage.getItem('userinfo')
    if ((!token || !userinfo) && to.path !== '/login') {
        next('/login')
    } else if (to.path === '/login') {
        next()
    } else {
        let userinfoobj = JSON.parse(userinfo)
        if (to.path !== '/' && userinfoobj[to.path] === false) {
            next('/403');
        } else {
            next();
        }
    }
})

new Vue({
    router,
    i18n,
    data: {
        token: '',
        userinfo: {}
    },
    render: h => h(App)
}).$mount('#app')