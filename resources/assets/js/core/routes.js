import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Curriculum from '../features/curriculas/components/CurriculumComponent'
import SentCurricula from '../features/curriculas/pages/sentCurricula'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/curriculum',
            children: [
                {
                    path: 'sentCurricula',
                    component: SentCurricula,
                }
            ],
            component: Curriculum
        }
    ]
});

export default router;