<template>
    <!-- component -->
	<div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
		<form class="bg-white">
			<h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
			<p class="text-sm font-normal text-gray-600 mb-10">Welcome Back</p>
			<label for="website-admin" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Username</label>
			<div class="flex mb-2">
				<span class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" /></svg>
				</span>
				<input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="elonmusk">
			</div>

			<!-- <label for="input-group-1" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
			<div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
				</div>
				<input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.me">
			</div> -->

			<label for="input-group-1" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
			<div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
				</div>
				<input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="***************">
			</div>
			
			<button type="submit" class="block w-full bg-blue-600 hover:bg-blue-400 transition duration-700 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign in</button>
			<span class="text-sm ml-2 hover:text-blue-600 transition duration-700 cursor-pointer">Forgot Password ?</span>
		</form>
	</div>

</template>

<script>
	import SigningLayout from '@/Layouts/SigningLayout.vue';
	export default{
		layout: SigningLayout
	}
</script>