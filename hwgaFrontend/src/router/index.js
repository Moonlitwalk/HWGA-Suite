import Dashboard from '@/views/DashBoard.vue'
import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/dashboard',
    name: 'dashboard',
    component: Dashboard,
  },
]
const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
