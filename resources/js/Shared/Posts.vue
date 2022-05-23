<template>
    <div class="grid grid-cols-4 gap-5">
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
