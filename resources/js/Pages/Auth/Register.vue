<template>
    <Head>
        <title>Register</title>
    </Head>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full p-6 m-auto bg-white border-t-4 border-purple-600 rounded-3xl shadow-2xl border-top lg:max-w-lg">

            <div class="flex justify-center mb-5">
                <img
                    src="/storage/images.png"
                    class="rounded-full shadow-xl"
                    width="150"
                    alt="logo"
                >
            </div>

            <h3 class="text-2xl font-bold text-purple-600 text-center">Join us</h3>

            <form @submit.prevent="submit">

                <div class="mt-4">
                    <div>
                        <label class="block text-sm text-gray-800" for="Name">Name</label>
                        <input
                            type="text"
                            name="name"
                            v-model="form.name"
                            placeholder="Name"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-purple-600"
                        >
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm text-gray-800" for="email">Email</label>
                        <input
                            type="text"
                            placeholder="Email"
                            name="email"
                            v-model="form.email"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-purple-600"
                        >
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm text-gray-800">Password</label>
                        <input
                            type="password"
                            placeholder="Password"
                            name="password"
                            v-model="form.password"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-purple-600"
                        >
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm text-gray-800">Confirm Password</label>
                        <input
                            type="password"
                            placeholder="Password"
                            name="password_confirmation"
                            v-model="form.password_confirmation"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-purple-600"
                        >
                    </div>

                    <!--                    <span class="text-xs text-red-400">Password must be same!</span>-->

                    <div class="flex">
                        <button
                            class="w-full px-6 py-2 mt-4 text-white bg-purple-600 rounded-lg hover:bg-purple-900">
                            Create Account
                        </button>
                    </div>

                    <p class="mt-8 text-sm text-center font-light text-gray-700">
                        Already have an account?
                        <Link class="text-purple-600 hover:underline" href="/login">
                            Log in
                        </Link>
                    </p>
                </div>
            </form>

        </div>
    </div>
</template>

<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

let form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

let submit = () => {
    form.post('/register');
}

</script>
