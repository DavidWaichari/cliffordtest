import { createRouter, createWebHistory } from 'vue-router';
import AdminLayout from './components/layouts/Admin.vue'
import AdminDashboard from './components/admin/Dashboard.vue';
import BookingsIndex from './components/admin/bookings/Index.vue';
import FlightIndex from './components/admin/flights/Index.vue';
import FlightCreate from './components/admin/flights/Create.vue';
import Destinations from './components/admin/destinations/Index.vue';
import DestinationsCreate from './components/admin/destinations/Create.vue';
import DestinationsEdit from './components/admin/destinations/Edit.vue';

//user
import UserLayout from './components/layouts/User.vue'
import Homepage from './components/user/Homepage.vue'




const routes = [
    {
      path:'/',
      component: UserLayout,
        children: [
            {
                path: '',
                component: Homepage
            }
        ]
    },
    {
        path:'/admin',
        component: AdminLayout,
        children:[
            {
                path: '',
                redirect: 'admin/dashboard',
            },
            {
                path: 'dashboard',
                component: AdminDashboard,
            },
            {
                path: 'bookings',
                component: BookingsIndex,
            },
            {
                path: 'flights',
                component: FlightIndex,
            },
            {
                path:'flights/create',
                component:FlightCreate
            },
            {
                path:'destinations',
                component: Destinations
            },
            {
                path:'destinations/create',
                component: DestinationsCreate
            },
            {
                path:'destinations/:id/edit',
                component: DestinationsEdit
            }

        ]
    }

    // Add other routes as needed
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
