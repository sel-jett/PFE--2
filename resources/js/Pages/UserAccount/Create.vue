<template>
	<div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
    <form @submit.prevent="register" class="bg-white">
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Dear!</h1>
			<p class="text-sm font-normal text-gray-600 mb-10">Welcome To NAJA7I</p>
	
        <label for="name" class="block mb-1 text-sm font-medium text-gray-900 ">Your Name</label>
			  <div class="relative mb-2">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" /></svg>
				  </div>
          <input id="name" v-model="form.name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="elon musk"/>
        </div>
        <div v-if="form.errors.name" >{{form.errors.name }} </div>
        
        
        <label for="username" class="block mb-1 text-sm font-medium text-gray-900">Username</label>
        <div class="flex mb-2">
				<span class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" /></svg>
				</span>
        <input id="username" v-model="form.username" type="text" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="elonmusk71"/>
        </div>
        <div v-if="form.errors.username" >{{form.errors.username }}</div>
          
        <label for="email" class="block mb-1 text-sm font-medium text-gray-900">E-mail</label>
        <div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
				</div>
        <input id="email" v-model="form.email" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="elon@musk.me"/>
        </div>  
        <div v-if="form.errors.email">{{form.errors.email }}</div>
          
        <label for="password" class="block mb-1 text-sm font-medium text-gray-900">Password</label>
        <div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
				</div>
        <input id="password" v-model="form.password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="***************"/>
        </div>  
        <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
          
        <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-900">Confirm Password</label>
        <div class="relative mb-2">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
				</div>
        <input id="password_confirmation" v-model="form.password_confirmation" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="***************"/>
        </div>  
        
        
        <label for="underline_select" class="sr-only">Role</label>
        <select v-model="form.teacher" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
          <option value="0" class="text-black">Student</option>
          <option value="1" class="text-black">Teacher</option>
        </select>
        <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-400 transition duration-700 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign up</button>
        <span class="italic text-sm ml-2">Already a user?<Link :href="route('login')" class="text-sm ml-2 hover:text-blue-600 transition duration-700 cursor-pointer">Sign in</Link></span>
    </form>
  </div>
</template>

<script setup>

import { useForm, Link } from '@inertiajs/inertia-vue3'
const form = useForm({
  name: null,
  username: null,
  email: null,
  password: null,
  password_confirmation: null,
  teacher: 0,
})
const register = () => form.post(route('user-account.store'))
</script>

<script>
  import AuthLayout from '@/Layouts/AuthLayout.vue';
  export default {
    layout: AuthLayout
  }
</script>