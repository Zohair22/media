<template>
    <div class="max-w-xl mx-auto border border-2 mt-6 p-5 rounded-3xl shadow-xl">
        <form @submit.prevent="submit" enctype="multipart/form-data">
            <div>
                    <textarea
                        name="caption"
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-2xl focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40"
                        rows="3"
                        v-model="form.caption"
                    ></textarea>
            </div>

            <div class="mt-6">
                <input
                    type="file"
                    name="photo"
                    @input="form.photo = $event.target.files[0]"
                    class="block w-full mt-2 text-purple-700 bg-white border rounded-2xl focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40"
                >
            </div>
            <div class="mt-6 text-right">
                <button
                    class="px-8 py-1 tracking-wide text-white transition-colors duration-700 transform bg-purple-700 rounded-3xl hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                    Share
                </button>
            </div>
        </form>

        <div v-if="errors">
            <ul v-for="error in errors">
                <li v-text="error" />
            </ul>
        </div>
    </div>
</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let props = defineProps({
    auth: Array,
    errors: Array,
})

let form = useForm({
    'photo': '',
    'caption': '',
    'user_id': '',
})

form.user_id = props.auth.user.id

let submit = () => { form.post('/storePost', { preserveScroll: true, preserveState: true}) }
</script>


