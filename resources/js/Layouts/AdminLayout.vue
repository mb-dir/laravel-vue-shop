<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Nav from "@/Pages/Admin/Components/Nav.vue";
import Aside from "@/Pages/Admin/Components/Aside.vue";

onMounted(() => {
    initFlowbite();
});
</script>
<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- navbar start -->
        <Nav />
        <!-- end -->
        <!-- Sidebar -->
        <Aside />
        <!-- end -->
        <main class="p-4 md:ml-64 h-auto pt-20">
            <slot />
        </main>
    </div>
</template>
