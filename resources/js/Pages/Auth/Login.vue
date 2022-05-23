<template>
    <Head>
        <title>Log in</title>
    </Head>

    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">

        <div class="w-full p-6 m-auto bg-white border-t-4 border-purple-600 rounded-3xl shadow-xl border-top lg:max-w-lg">

            <div class="flex justify-center mb-5">
                <img
                    src="/storage/images.png"
                    class="rounded-full shadow-2xl"
                    width="150"
                    alt="logo"
                >
            </div>

            <h3 class="text-2xl font-bold text-purple-600 text-center">Log in</h3>

            <form class="mt-6" @submit.prevent="submit">
                <div>
                    <label for="email" class="block text-sm text-gray-800">Email</label>
                    <input
                        type="email"
                        name="email"
                        v-model="form.email"
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>

                <div class="mt-4">
                    <div>
                        <label for="password" class="block text-sm text-gray-800">Password</label>
                        <input type="password"
                               name="password"
                               v-model="form.password"
                               class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>

                    <div class="mt-6">
                        <button
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                            Login
                        </button>
                    </div>

                </div>
            </form>
            <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account?
                <Link href="/register" class="font-medium text-purple-600 hover:underline">Sign up</Link>
            </p>
        </div>
    </div>

</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let form = useForm({
    email: '',
    password: '',
});

let submit = () => {
    form.post('/login');
}
</script>
