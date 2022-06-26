<template>
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5 space-x-2">
        <div v-for="post in posts">
            <PostGrid :post="post" />
        </div>
    </div>
</template>

<script setup>
import PostGrid from '../Shared/PostGrid';

defineProps({
    posts: Array
})
</script>

<style scoped>

</style>
