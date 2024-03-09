import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'main',
        component: () => import('../components/Site/Pages/SiteMain.vue')
    },
    {
        path: '/abouts',
        name: 'abouts',
        component: () => import('../components/Site/Pages/SiteAbout.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
