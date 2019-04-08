import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Curriculum from '../features/curriculas/curriculum'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/curriculum',
            component: Curriculum
        }
    ]
})

export default router;