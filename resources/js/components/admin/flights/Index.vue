<template>
    <div class="dashboard-content-wrap">
        <!-- Breadcrumb section -->
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Flights</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Flights</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="title">Flights List</h3>
                                </div>
                                <router-link to="/admin/flights/create" type="submit" class="theme-btn">
                                    Add Flight <i class="la la-arrow-right ms-1"></i>
                                </router-link>
                            </div>

                            <div class="form-content">
                                <div class="col-lg-4 responsive-column">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="text" placeholder="Search..." v-model="searchValue">
                                        </div>
                                    </div>
                                </div>

                                <!-- DataTable component -->
                                <EasyDataTable
                                    :headers="headers"
                                    :items="formattedItems"
                                    :search-field="searchField"
                                    :search-value="searchValue"
                                    show-index
                                >
                                    <template #item-destination="item">
                                        <p>{{ item.destination.name }}</p>
                                    </template>
                                    <template #item-class="item">
                                        <p>{{ item.destination_class.name }}</p>
                                    </template>
                                    <template #item-airline="item">
                                        <p>{{ item.airline.name }}</p>
                                    </template>
                                    <template #item-price="item">
                                        <p>{{ item.destination_class.price }}</p>
                                    </template>
                                    <template #item-departure="item">
                                        <p>{{ formatDateTime(item.departure) }}</p>
                                    </template>
                                    <template #item-arrival="item">
                                        <p>{{ formatDateTime(item.arrival) }}</p>
                                    </template>
                                    <template #item-actions="item">
                                        <a @click.prevent="viewDetails(item)" href="#" class="theme-btn theme-btn-small me-2" data-bs-toggle="modal" data-bs-target="#loginPopupForm"><i class="la la-eye"></i></a>
                                        <router-link :to="`/admin/flights/${item.id}/edit`" class="theme-btn theme-btn-small me-2" aria-label="Edit details" data-bs-original-title="Edit details"><i class="la la-edit"></i></router-link>
                                        <a @click.prevent="confirmDelete(item)" href="#" class="theme-btn theme-btn-small me-2" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete details" data-bs-original-title="Delete details"><i class="la la-trash"></i></a>
                                    </template>
                                </EasyDataTable>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="border-top mt-5"></div>
                <Footer></Footer>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import Footer from '../shared/Footer.vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import { Header, Item } from 'vue3-easy-data-table';

const searchField = ['destination', 'destination_class', 'airline'];
const searchValue = ref('');

const headers: Header[] = [
    { text: 'DESTINATION', value: 'destination' },
    { text: 'CLASS', value: 'class' },
    { text: 'AIRLINE', value: 'airline' },
    { text: 'FLIGHT TYPE', value: 'flight_type' },
    { text: 'NO OF PASS', value: 'no_of_passengers' },
    { text: 'ORIGINAL PRICE', value: 'price' },
    { text: 'CURRENT PRICE', value: 'current_price' },
    { text: 'DEPARTURE', value: 'departure' },
    { text: 'ARRIVAL', value: 'arrival' },
    { text: 'STATUS', value: 'status', sortable: true },
    { text: 'Actions', value: 'actions' },
];

const items: Item[] = ref([]);
const formattedItems = ref([]);

const router = useRouter();
const image_url = ref('');

const viewDetails = (item: Item) => {
    image_url.value = item.media_url
};

const confirmDelete = (item: Item) => {
    if (confirm(`Are you sure you want to delete ${item.name}?`)) {
        deleteItem(item);
    }
};

const deleteItem = async (item: Item) => {
    try {
        await axios.delete(`/api/admin/flights/${item.id}`);
        items.value = items.value.filter(i => i.id !== item.id);
    } catch (error) {
        console.error('Error deleting flight:', error);
    }
};

const formatDateTime = (dateTimeStr: string) => {
    const dateTime = new Date(dateTimeStr);
    const options = { day: 'numeric', month: 'short', hour: 'numeric', minute: 'numeric' };
    return dateTime.toLocaleDateString('en-US', options);
};

onMounted(async () => {
    try {
        const response = await axios.get('/api/admin/flights');
        items.value = response.data.flights; // Update reactive reference
        formattedItems.value = response.data.flights.map((flight: Item) => ({
            ...flight,
            departure: formatDateTime(flight.departure),
            arrival: formatDateTime(flight.arrival),
        }));
    } catch (error) {
        console.error('Error fetching flights:', error);
    }
});
</script>

<style scoped>
.form-select {
    height: 50px;
    line-height: inherit;
    padding: 10px 20px 10px 40px;
    font-size: 13px;
    color: #0d233e;
}
button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
}
button:hover {
    background-color: #0056b3;
}
</style>
