<template>
    <!-- b      anner -->
    <div class="relative w-full h-80">
        <img src="@/../images/banner1.jpg" class="object-cover max-h-80 min-w-full" alt="">
        <div class="absolute top-20 right-16 bg-white p-5 rounded-xl">
            <h1 class="text-3xl font-semibold">Learning that lasts</h1>
            <p>Invest in yourself. Log in now for special savings on courses.<br> Sale ends March 30.</p>
            <Link :href="route('user-account.create')" type="button" class=" m-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Get Started</Link>
        </div>
    </div>
    <!-- body -->
    <div class="my-6">
        <a href="#" class="ml-112 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 ml-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>

            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">A broad selection of courses</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">the availability of online video courses that are published every month by experienced teachers from all over Morocco. The courses are designed to be accessed and taken online, so learners can choose from a variety of different courses that interest them.</p>
            </div>
        </a>
    </div>
    <div class="my-6">
        <a href="#" class="ml-48 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">A broad selection of courses</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">the availability of online video courses that are published every month by experienced teachers from all over Morocco. The courses are designed to be accessed and taken online, so learners can choose from a variety of different courses that interest them.</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 mr-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>
        </a>
    </div>
    <!-- top teachers  -->
    <div class="text-center">
        <h1 class="text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-4xl dark:text-white"><span class="text-blue-600 dark:text-blue-500">NAJA7I</span> is trsted by the best online teachers.</h1>
        <div class="flex justify-center">
            <div class="mx-4 text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="	https://t9achrtv.ma/static/assets/media/custom/logo_edge.png" alt="product image" />
                <h1 class="font-semibold text-xl">Aderdour Mustapha</h1>
                <h2 class="text-gray-600">Mathematics</h2>
                <Link :href="route('course.index')" type="button" class=" mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
            </div>
            <div class="text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="	https://t9achrtv.ma/static/assets/media/custom/logo_edge.png" alt="product image" />
                <h1 class="font-semibold text-xl">Aderdour Mustapha</h1>
                <h2 class="text-gray-600">Mathematics</h2>
                <Link :href="route('course.index')" type="button" class=" mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
            </div>
            <div class="mx-4 text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="	https://t9achrtv.ma/static/assets/media/custom/logo_edge.png" alt="product image" />
                <h1 class="font-semibold text-xl">Aderdour Mustapha</h1>
                <h2 class="text-gray-600">Mathematics</h2>
                <Link :href="route('course.index')" type="button" class=" mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
            </div>
        </div>
    </div>
    <!-- featured courses -->
    <div v-for="course in courses" :key="course.id">
    <div>
        <Link :href="route('course.show',{course: course.id})">
            <CourseAdresse :course="course" />
        </Link>
    </div>
  </div>

  </template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import CourseAdresse from '@/Components/CourseAdresse.vue';
    defineProps({
        courses: Array,
    })  
</script>
