import './bootstrap';
import { createApp } from 'vue';
import router from './router'; // Import the router
import Vue3EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';
import store from './store'; // Import the store


const app = createApp({});



import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);
app.component('EasyDataTable', Vue3EasyDataTable);

app.use(router);
// Use the store
app.use(store);
app.mount('#app');
