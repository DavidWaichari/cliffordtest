import { createStore } from 'vuex';
import axios from 'axios';

export default createStore({
    state: {
        user: null,
        isAuthenticated: false,
        token: localStorage.getItem('token') || '',
    },
    mutations: {
        SET_USER(state, user) {
            state.user = user;
            state.isAuthenticated = !!user;
        },
        SET_TOKEN(state, token) {
            state.token = token;
            localStorage.setItem('token', token);
        },
        LOGOUT(state) {
            state.user = null;
            state.isAuthenticated = false;
            state.token = '';
            localStorage.removeItem('token');
        },
    },
    actions: {
        async login({ commit }, credentials) {
            try {
                const response = await axios.post('/api/auth/login', credentials);
                const token = response.data.token;
                const user = response.data.user;

                commit('SET_TOKEN', token);
                commit('SET_USER', user);

                // Set the authorization header for future requests
                axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
            } catch (error) {
                console.error('Failed to login:', error);
                throw error;
            }
        },
        async logout({ commit }) {
            try {
                await axios.post('/api/auth/logout');
                commit('LOGOUT');
                delete axios.defaults.headers.common['Authorization'];
            } catch (error) {
                console.error('Failed to logout:', error);
                throw error;
            }
        },
    },
    getters: {
        isAuthenticated: (state) => state.isAuthenticated,
        user: (state) => state.user,
    },
});
