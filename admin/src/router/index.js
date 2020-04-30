import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            redirect: '/dashboard'
        },
        {
            path: '/',
            component: resolve => require(['../components/common/Home.vue'], resolve),
            meta: { title: '自述文件' },
            children:[
                {
                    path: '/dashboard',
                    component: resolve => require(['../components/page/Dashboard.vue'], resolve),
                    meta: { title: '系统首页' }
                },
                {
                    path: '/news',
                    component: resolve => require(['../components/page/News.vue'], resolve),
                    meta: { title: '新闻管理' }
                },
                {
                    path: '/editarticle',
                    component: resolve => require(['../components/page/EditArticle.vue'], resolve),
                    meta: { title: '新闻编辑' }
                },
                {
                    path: '/spiderlist',
                    component: resolve => require(['../components/page/SpiderLog.vue'], resolve),
                    meta: { title: '蜘蛛记录' }
                },
                {
                    path: '/config',
                    component: resolve => require(['../components/page/Config.vue'], resolve),
                    meta: { title: '系统配置' }
                }
            ]
        },
        {
            path: '/login',
            component: resolve => require(['../components/page/Login.vue'], resolve)
        },
        {
            path: '*',
            redirect: '/404'
        }
    ]
})
