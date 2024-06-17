<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Destination Classes
                                </h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Destination Classes</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="title">Destination Classes List</h3>
                                </div>
                                <router-link to="/admin/destination_classes/create" type="submit" class="theme-btn">
                                    Add Destination Classes <i class="la la-arrow-right ms-1"></i>
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

                                <EasyDataTable
                                    :headers="headers"
                                    :items="items"
                                    :search-field="searchField"
                                    :search-value="searchValue"
                                    show-index
                                >
                                    <template #item-destination="item">
                                        <p>{{ item.destination.name }}</p>
                                    </template>
                                    <template #item-actions="item">
                                        <a @click.prevent="viewDetails(item)" href="#" class="theme-btn theme-btn-small me-2" data-bs-toggle="modal" data-bs-target="#loginPopupForm"><i class="la la-eye"></i></a>
                                        <router-link :to="`/admin/destination_classes/${item.id}/edit`" class="theme-btn theme-btn-small me-2" aria-label="Edit details" data-bs-original-title="Edit details"><i class="la la-edit"></i></router-link>
                                        <a @click.prevent="confirmDelete(item)" href="#" class="theme-btn theme-btn-small me-2" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete details" data-bs-original-title="Delete details"><i class="la la-trash"></i></a>
                                    </template>
                                </EasyDataTable>
                            </div>
                        </div>
                        <!-- end form-box -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="border-top mt-5"></div>
                <Footer></Footer>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
    </div>
    <div class="modal-popup">
        <div
            class="modal fade"
            id="loginPopupForm"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <p class="font-size-14">Picture</p>
                        </div>
                        <button
                            type="button"
                            class="btn-close close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img :src="image_url" height="400" width="400">
                    </div>
                </div>
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

const searchField = ['name', 'description', 'landmark'];
const searchValue = ref('');

const headers: Header[] = [
    { text: 'NAME', value: 'name' },
    { text: 'DESTINATION', value: 'destination' },
    { text: 'PRICE', value: 'price' },
    { text: 'CURRENT PRICE', value: 'current_price' },
    { text: 'STATUS', value: 'status', sortable: true },
    { text: 'Actions', value: 'actions' },
];

const items: Item[] = ref([]);
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
        await axios.delete(`/api/admin/destination_classes/${item.id}`);
        items.value = items.value.filter(i => i.id !== item.id);
    } catch (error) {
        console.error('Error deleting destination:', error);
    }
};

onMounted(async () => {
    try {
        const response = await axios.get('/api/admin/destination_classes');
        items.value = response.data.destination_classes; // Update reactive reference
    } catch (error) {
        console.error('Error fetching destinations:', error);
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
