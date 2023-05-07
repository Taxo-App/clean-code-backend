<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import TaxoTable from "../../Components/Taxo/TaxoTable.vue";
const props = defineProps({
    topics: Object,
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Topics
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <TaxoTable class="px-2 py-6" :topics="topics.data" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
