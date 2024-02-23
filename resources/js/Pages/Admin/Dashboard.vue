<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Nav from "./Components/Nav.vue";
import Aside from "./Components/Aside.vue";
import Main from "./Components/Main.vue";

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <Nav />
        <Aside />
        <Main />
    </div>
</template>
