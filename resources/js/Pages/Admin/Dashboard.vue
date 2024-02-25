<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Main from "./Components/Main.vue";

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <AdminLayout>
        <Main />
    </AdminLayout>
</template>
