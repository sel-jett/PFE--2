<template>
	<div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
  <form @submit.prevent="login">
      
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
			<p class="text-sm font-normal text-gray-600 mb-10">Welcome Back</p>

      <label for="username" class="block mb-1 text-sm font-medium text-gray-900">Username</label>
			<div class="flex mb-2">
        <span class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" /></svg>
				</span>
        <input id="username" v-model="form.username" type="text" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="elonmusk"/>
      </div>
      <div v-if="form.errors.username" class="input-error">{{ form.errors.username }}</div>
      
      <label for="password" class="block mb-1 text-sm font-medium text-gray-900">Password</label>
        <div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
				</div>
        <input x-data="{ show: true }" id="password" v-model="form.password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="***************"/>
        
      </div>
      <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
      
      <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-400 transition duration-700 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign in</button>
      <span class="italic text-sm ml-2 cursor-pointer">Don't have an account? <span class="hover:text-blue-600 transition duration-700">Sign up</span></span>
  </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const form = useForm({
  username: null,
  password: null,
})
const login = () => form.post(route('login.store'))
</script>

<script> 
	import AuthLayout from '@/Layouts/AuthLayout.vue';
	export default{
		layout: AuthLayout
	}
</script>