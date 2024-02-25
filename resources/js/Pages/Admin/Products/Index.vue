<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import ProductList from "./ProductList.vue";
defineProps({
    products: { type: Object, required: true },
});
</script>
<template>
    <AdminLayout>
        <ProductList :products="products" />
    </AdminLayout>
</template>
