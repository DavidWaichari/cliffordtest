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

// user
import UserLayout from './components/layouts/User.vue'
import Homepage from './components/user/Homepage.vue'
import FlightDetails from './components/user/flights/Details.vue'

// authentication
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';

const routes = [
    {
        path: '/',
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
        path: '/admin',
        component: AdminLayout,
        meta: { requiresAuth: true },  // Protect all admin routes
        children: [
            {
                path: '',
                redirect: 'admin/dashboard',
            },
            {
                path: 'dashboard',
                component: AdminDashboard,
                meta: { requiresAuth: true }
            },
            {
                path: 'bookings',
                component: BookingsIndex,
                meta: { requiresAuth: true }
            },
            {
                path: 'flights',
                component: FlightIndex,
                meta: { requiresAuth: true }
            },
            {
                path: 'flights/create',
                component: FlightCreate,
                meta: { requiresAuth: true }
            },
            {
                path: 'flights/:id/edit',
                component: FlightEdit,
                meta: { requiresAuth: true }
            },
            {
                path: 'destinations',
                component: Destinations,
                meta: { requiresAuth: true }
            },
            {
                path: 'destinations/create',
                component: DestinationsCreate,
                meta: { requiresAuth: true }
            },
            {
                path: 'destinations/:id/edit',
                component: DestinationsEdit,
                meta: { requiresAuth: true }
            },
            {
                path: 'destination_classes',
                component: DestinationClasses,
                meta: { requiresAuth: true }
            },
            {
                path: 'destination_classes/create',
                component: DestinationsClassesCreate,
                meta: { requiresAuth: true }
            },
            {
                path: 'destination_classes/:id/edit',
                component: DestinationsClassesEdit,
                meta: { requiresAuth: true }
            },
            {
                path: 'airlines',
                component: AirlinesIndex,
                meta: { requiresAuth: true }
            },
            {
                path: 'airlines/create',
                component: AirlinesCreate,
                meta: { requiresAuth: true }
            },
            {
                path: 'airlines/:id/edit',
                component: AirlinesEdit,
                meta: { requiresAuth: true }
            },
        ]
    }
    // Add other routes as needed
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Global navigation guard to check for authentication
router.beforeEach((to, from, next) => {
    const isAuthenticated = !!localStorage.getItem('auth_token'); // Check if token exists in localStorage
    if (to.matched.some(record => record.meta.requiresAuth) && !isAuthenticated) {
        next('/login'); // Redirect to login page if not authenticated
    } else {
        next(); // Proceed to the route
    }
});

export default router;
