<template>
    <div class="bg-purple-400 py-5 px-4 rounded-3xl shadow-lg shadow-purple-400">
        <img :src="'storage/'+post.photo" class="rounded-3xl w-full mx-auto max-h-72" alt="" srcset="" />
        <p v-text="post.caption" class="text-center text-lg text-white uppercase font-bold mt-2" />
    </div>
</template>

<script setup>
defineProps({
    post: Object
})
</script>

<style scoped>

</style>
