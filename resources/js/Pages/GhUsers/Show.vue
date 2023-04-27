<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
const capitalizeName = (names) => {
	let words = names.split(" ");
	for (let i = 0; i < words.length; i++) {
		words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
	}
	return words.join(" ");
};

defineProps({
	user: {
		type: Object,
		required: true,
	},
	repos: {
		type: Object,
		required: true
	}
});
</script>

<template>
	<Head title="Github Profile" />

	<AuthenticatedLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">Github Profile</h2>
		</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="container mx-auto">
						<div class="bg-white p-6 mb-6">
							<div class="flex items-center mb-4">
								<img class="h-12 w-12 rounded-full mr-4" :src="user.avatar_url" alt="Profile picture">
								<div>
									<h2 class="text-lg font-semibold text-gray-900">{{ user.name }}</h2>
									<a :href="user.html_url" target="_blank"
										class="text-blue-500 hover:underline text-sm">Open GitHub
										Profile</a> &#128279;&#10548;
									<p class="text-gray-700">Since {{ new
										Date(user.created_at).toLocaleDateString('pt-BR')}}</p>
								</div>
							</div>
							<div v-if="user.gh_id"  class="text-center items-center mb-4"><Link as="button" disabled class="bg-transparent text-blue-700 font-semibold rounded">Saved Locally &#10003;</Link></div>
							<div v-else class="text-center items-center mb-4"><Link :href="route('ghusers.store')" method="post" :data="{login: user.login}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" as="button">Save Locally</Link></div>
							
							<p class="text-gray-700">{{user.bio}} </p>
							<br>
							<p class="text-gray-700 text-xs">followers: {{user.followers}}  &bull; following {{ user.following }}</p>

						</div>
						<div id="card" class="">
							<h2 class="text-center uppercase text-2xl xl:text-2xl">Public Repositories<span
									class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 mx-2 align-top animate-pulse">{{
										user.public_repos }}</span></h2>

						</div>
						<hr class="my-2">
						<div class="container w-100 lg:w-4/5 mx-auto flex flex-col divide-y">
							<!-- repo card -->
							<div v-for="repo in repos" class="flex flex-col md:flex-row overflow-hidden
                                        bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
								
								<div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
									<h3 class="font-semibold text-lg leading-tight truncate">{{ repo.name }}</h3>
									<p class="mt-2">
										{{ repo.description }}
									</p>
									<p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
										<a class="text-blue-500 hover:underline" :href="repo.html_url" target="_blank">{{ repo.full_name }}</a> &#128279;&#10548; 
										<!-- ↗ -->
									</p>
									<p class="text-xs text-gray-700 uppercase tracking-wide font-semibold mt-2">
										Created at: {{ new Date(repo.created_at).toLocaleDateString('pt-BR') }}
										&bull;
										Last Update: {{ new Date(repo.updated_at).toLocaleDateString('pt-BR') }}
									</p>
									<div>
									<span
										v-if="repo.language"
	                                    class="text-sm text-grey-800 font-mono bg-blue-100 inline rounded-full px-2 align-top float-right animate-pulse">{{
	                                    	repo.language }}</span>

									</div>
								</div>
							</div><!--/ card-->
						</div><!--/ flex-->
					</div>
				</div>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
