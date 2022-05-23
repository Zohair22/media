<template>
    <div class="bg-purple-400 py-2 px-4 rounded-3xl mb-">
        <p v-text="post.caption" />
        <img :src="'storage/'+post.photo" class="rounded-full" alt="" srcset="" />
    </div>
</template>

<script setup>

defineProps({
    post: Object
})
</script>

<style scoped>

</style>
