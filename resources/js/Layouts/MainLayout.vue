<template>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <Link :href="route('home')" class="flex items-center">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><span class="text-blue-600">N</span>AJA7I</span>
  </Link>
  <div class="relative flex items-center md:order-2" v-if="user == null">
	<Link :href="route('login')" type="button" class="text-blue-700 bg-gray-100 hover:bg-gray-200 hover:text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-white dark:hover:bg-gray-300 dark:text-blue-700 dark:hover:text-blue-700r dark:focus:ring-blue-800 transition duration-500">Sign in</Link>
	<Link :href="route('user-account.create')" type="button" class=" mx-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Sign up</Link>
  </div>
  <div class="relative flex items-center md:order-2" v-else @click="showDropdown = !showDropdown">
  <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-blue-600 dark:focus:ring-blue-600">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 rounded-full" src="data:image/png;base64,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" alt="user photo">
  </button>
  <!-- Dropdown menu -->
  <div class="z-50 absolute right-0 top-9 w-48 mt-2 py-2 bg-white rounded-md shadow-lg" v-if="showDropdown">
	<div class="italic block px-4 py-2 text-gray-400 ">
      <p>{{ user.username }}</p>
      <p>{{ user.email }}</p>
    </div>
	<div class="border-t border-gray-100"></div>
    <div v-if="teacher" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
      <Link :href="route('realtor.course.index')">Dashboard</Link>
    </div>
    <div v-if="teacher" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
      <Link :href="route('realtor.course.create')">Add a course</Link>
    </div>
    <div class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
      <Link href="#">Settings</Link>
    </div>
    <div class="border-t border-gray-100"></div>
    <div class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
      <Link :href="route('logout')" method="delete">Sign out</Link>
    </div>
  </div>
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <Link :href="route('home')" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page" :class="{ 'text-blue-500 active': activeLink === 'home' }" @click="setActiveLink('home')">Home</Link>
      </li>
      <li>
        <Link :href="route('about-us')" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" :class="{ 'text-blue-500 active': activeLink === 'about-us' }" @click="setActiveLink('about-us')">About us</Link>
      </li>
      <li>
        <Link :href="route('course.index')" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" :class="{ 'text-blue-500 active': activeLink === 'course.index' }" @click="setActiveLink('course.index')">Courses</Link>
      </li>
    </ul>
  </div>
  </div>
</nav>
<slot>default</slot>

</template>

<script setup>
	import { computed } from 'vue'
	import { Link, usePage } from '@inertiajs/inertia-vue3'
	import MainLayout from '@/Layouts/MainLayout.vue';
	// const x = ref(0)
	// const y = computed(() => x.value * 2)
	const page = usePage()
	const flashSuccess = computed(
		() => page.props.value.flash.success,
	);
	const user = computed(
	() => page.props.value.user,
	); 
	const teacher = computed(
	() => page.props.value.teacher,
	)
</script>

<script>
export default {
  data() {
    return {
      showDropdown: false,
	  activeLink: 'home',
    };
  },
  methods: {
    setActiveLink(link) {
      this.activeLink = link;
    },
  },
};

</script>