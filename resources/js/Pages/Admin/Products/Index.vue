<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import ProductList from "./ProductList.vue";
const props = defineProps({
    products: { type: Object, required: true },
    brands: { type: Object, required: true },
    categories: { type: Object, required: true },
});
</script>
<template>
    <AdminLayout>
        <ProductList v-bind="props" />
    </AdminLayout>
</template>
