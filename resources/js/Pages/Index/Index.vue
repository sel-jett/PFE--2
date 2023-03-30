<template>
    <!-- b      anner -->
    <div class="relative w-full h-80">
        <img src="@/../images/banner1.jpg" class="object-cover max-h-80 min-w-full" alt="">
        <div class="absolute w-96 top-16 right-24 bg-white p-5 rounded-xl">
            <h1 class="text-3xl font-semibold">Welcome to <span class="text-blue-600">N</span>AJA7I,</h1>
            <p>the online learning platform where you can discover and enroll in expert-led courses that will help you achieve your career goals.</p>
            <Link :href="route('user-account.create')" type="button" class=" my-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Get Started</Link>
        </div>
    </div>
    <!-- why Naja7i ? -->
    <h1 class="text-3xl font-semibold my-10 text-center dark:text-white">Why <span class="text-blue-600">N</span>AJA7I?</h1>
    <div class="my-6 cursor-help">
        <div class="m-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:scale-105 transition duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 mx-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>

            <div class="w-120 flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Wide Range of Courses</h5>
                <p class="mb-3 text-justify font-normal text-gray-700 dark:text-gray-400">Our courses cover a wide range of topics, from Physics and Mathematics to Philosophy and English. With over 100 courses to choose from, you're sure to find the right one for you.</p>
            </div>
        </div>
    </div>
    <div class="flex justify-around cursor-help">
        <div class="my-6">
            <div class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:scale-105 transition duration-500">
                <div class="w-120 flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Experienced Instructors</h5>
                    <p class="mb-3 text-justify font-normal text-gray-700 dark:text-gray-400">Our courses are designed and taught by industry experts who have years of experience in their fields. They bring their real-world knowledge and expertise to the classroom, helping you develop your skills that you need in Baccalaureat right away.</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 mx-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>

    
            </div>
        </div>
        <div class="my-6 cursor-help">
            <div class="w-120 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:scale-105 transition duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 mx-8 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                </svg>

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Affordable Prices</h5>
                    <p class="mb-3 text-justify font-normal text-gray-700 dark:text-gray-400">At <span class="text-blue-600">N</span>AJA7I, we believe that learning should be accessible and affordable for everyone. That's why we offer our courses at competitive prices and provide flexible payment options to suit your needs.We're committed to helping you achieve your learning goals without breaking the bank, so you can invest in your future with confidence.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-6 cursor-help">
        <div class="m-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:scale-105 transition duration-500">
            <div class="w-120 flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fresh Course Content Every Month</h5>
                <p class="mb-3 text-justify font-normal text-gray-700 dark:text-gray-400">the availability of online video courses that are published every month by experienced teachers from all over Morocco. The courses are designed to be accessed and taken online, so learners can choose from a variety of different courses that interest them.</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-80 mx-8 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
            </svg>
        </div>
    </div>
    <div class="w-4/5 h-0.5 bg-gray-500 m-auto mb-5 rounded-xl dark:bg-whitee"></div>
    <!-- top teachers  -->
    <div class="text-center">
        <h1 class="text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-4xl dark:text-white"><span class="text-blue-600 dark:text-blue-500">NAJA7I</span> is trsted by the best online teachers.</h1>
        <div class="flex justify-center">
            <div class="mx-4 text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:text-white dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="@/../images/aderdour-removebg-preview.png" alt="product image" />
                <h1 class="font-semibold text-xl">Aderdour Mustapha</h1>
                <h2 class="text-gray-600 dark:text-gray-400">Mathematics</h2>
                <Link :href="route('course.index')" type="button" class=" my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
            </div>
            <div class="text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:text-white dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="@/../images/Square-PNG.png" alt="product image" />
                <h1 class="font-semibold text-xl">Noureddine Pc</h1>
                <h2 class="text-gray-600 dark:text-gray-400">Physics and Chemistry</h2>
                <Link :href="route('course.index')" type="button" class=" my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
            </div>
            <div class="mx-4 text-center my-8 w-64 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:text-white dark:border-gray-700 hover:scale-105 transitio duration-500">
                <img class="m-auto p-2 w-52 rounded-t-lg" src="@/../images/sarahsgvt-removebg-preview.png" alt="product image" />
                <h1 class="font-semibold text-xl">Sarah</h1>
                <h2 class="text-gray-600 dark:text-gray-400">Life and Earth Sciences</h2>
                <Link :href="route('course.index')" type="button" class=" my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-500">Explore</Link>
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
