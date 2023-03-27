<template>
    <div class="h-screen md:flex">
	<div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-500 to-blue-700 i justify-around items-center hidden">
		<div class="text-center">
			<h1 class="text-white font-bold text-4xl font-sans"><span class="underline">N</span>AJA7I</h1>
			<p class="text-white mt-1">We believe in Success !</p>
			<Link class="text-center block w-29 bg-white text-blue-600 mt-4 py-2 rounded-2xl hover:bg-gray-300  font-bold mb-2 transition duration-700 ease-in-out" :href="route('home')">Explore More</Link>
        </div>
		<div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
	</div>
    <slot>default</slot>
</div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
</script>