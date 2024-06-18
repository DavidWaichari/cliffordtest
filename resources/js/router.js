import { createRouter, createWebHistory } from 'vue-router';
import AdminLayout from './components/layouts/Admin.vue'
import AdminDashboard from './components/admin/Dashboard.vue';
import BookingsIndex from './components/admin/bookings/Index.vue';
import FlightIndex from './components/admin/flights/Index.vue';
import FlightCreate from './components/admin/flights/Create.vue';
import FlightEdit from './components/admin/flights/Edit.vue';
import Destinations from './components/admin/destinations/Index.vue';
import DestinationsCreate from './components/admin/destinations/Create.vue';
import DestinationsEdit from './components/admin/destinations/Edit.vue';
import DestinationClasses from './components/admin/destination_classes/Index.vue';
import DestinationsClassesCreate from './components/admin/destination_classes/Create.vue';
import DestinationsClassesEdit from './components/admin/destination_classes/Edit.vue';
import AirlinesIndex from './components/admin/airlines/Index.vue';
import AirlinesCreate from './components/admin/airlines/Create.vue';
import AirlinesEdit from './components/admin/airlines/Edit.vue';

//user
import UserLayout from './components/layouts/User.vue'
import Homepage from './components/user/Homepage.vue'
import FlightDetails from './components/user/flights/Details.vue'
//authentication

import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';



const routes = [
    {
      path:'/',
      component: UserLayout,
        children: [
            {
                path: '',
                component: Homepage
            },
            {
                path: 'login',
                component: Login
            },
            {
                path: 'register',
                component: Register
            },
            {
                path: 'flights/:id/details',
                component: FlightDetails
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
                path:'flights/:id/edit',
                component:FlightEdit
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
            },
            {
                path:'destination_classes',
                component: DestinationClasses
            },
            {
                path:'destination_classes/create',
                component: DestinationsClassesCreate
            },
            {
                path:'destination_classes/:id/edit',
                component: DestinationsClassesEdit
            },
            {
                path:'airlines',
                component: AirlinesIndex
            },
            {
                path:'airlines/create',
                component: AirlinesCreate
            },
            {
                path:'airlines/:id/edit',
                component: AirlinesEdit
            },

        ]
    }

    // Add other routes as needed
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
