<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';

const capitalizeName = (names) => {
    let words = names.split(" ");
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }
    return words.join(" ");
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Github User List</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mx-auto">
                        <div v-for="user in $page.props.ghusers" @click="router.visit('ghusers/' + user.login)">
                            <div class="bg-white shadow rounded-lg p-6 mb-6 cursor-pointer">
                                <div class="flex items-center mb-4">
                                    <img class="h-12 w-12 rounded-full mr-4" :src="user.avatar_url" alt="Profile picture">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-900">{{ user.name }}</h2>
                                        <a :href="user.html_url" target="_blank"
                                            class="text-blue-500 hover:underline text-sm">Open GitHub
                                            Profile</a> &#128279;&#10548;
                                        <p class="text-gray-700 text-sm">Since {{ new
                                            Date(user.created_at).toLocaleDateString('pt-BR') }}</p>
                                    </div>
                                </div>

                                <!-- <p class="text-gray-700" v-if="user.bio">{{ user.bio }}</p> -->

                                <span class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse">
                                    {{ user.public_repos }}</span>
                                <span class="text-sm font-mono inline px-2 align-top float-right">
                                    Public Repositories:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
