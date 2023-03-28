<template>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2 shadow rounded dark:bg-gray-900">
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


<footer class="bg-gray-100 dark:bg-gray-900">
    <div class="mx-auto w-full container p-4 sm:p-6">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
			<Link :href="route('home')" class="flex items-center">
      			<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><span class="text-blue-600">N</span>AJA7I</span>
  			</Link>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">NAJA7I™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>

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