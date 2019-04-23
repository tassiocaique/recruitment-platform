import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Curriculum from '../features/curriculas/components/CurriculumComponent'
import SentCurricula from '../features/curriculas/pages/SentCurricula'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/curriculum',
            children: [
                {
                    path: 'SentCurricula',
                    component: SentCurricula,
                }
            ],
            component: Curriculum
        }
    ]
});

export default router;