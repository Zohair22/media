<template>
    <div class="bg-purple-400 py-5 px-4 rounded-3xl mb-">
        <img :src="'storage/'+post.photo" class="rounded-full" alt="" srcset="" />
        <p v-text="post.caption" class="text-center mt-2" />
    </div>
</template>

<script setup>
defineProps({
    post: Object
})
</script>

<style scoped>

</style>
