<template>
    <Head title="Home" />

    <CreatePost :auth="auth" :errors="errors" />

    <div class="max-w-5xl mx-auto my-12">
        <Posts :posts="posts"/>
    </div>

</template>

<script setup>
import CreatePost from '../Shared/CreatePost';
import Posts from '../Shared/Posts';

let props = defineProps({
    auth: Array,
    errors: Array,
    posts: Array
})
</script>

