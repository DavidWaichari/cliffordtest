// import 'bootstrap';

import axios from 'axios';
window.axios = axios;

// Set default headers for Axios
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Retrieve token from localStorage if it exists
const token = localStorage.getItem('auth_token');

if (token) {
    // Check if the token is valid
    axios.get('/api/user', {
        headers: {
            Authorization: `Bearer ${token}`,
        },
    })
        .then(response => {
            // Token is valid, set it as the Authorization header
            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
        })
        .catch(error => {
            // Token is not valid or request failed
            console.error('Error validating token:', error);
            // Optionally, clear the invalid token from localStorage
            localStorage.removeItem('auth_token');
        });
}

// Example setup for Echo (if you need it)
// import Echo from 'laravel-echo';
// import Pusher from 'pusher-js';

// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
