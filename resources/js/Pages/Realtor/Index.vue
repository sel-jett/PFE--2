<template>
  <div class="container mx-auto">
    <h1 class="text-3xl my-4 text-center">Your <span class="text-blue-600">NAJA7I</span> Courses</h1>
    <div class="flex flex-col lg:flex-row justify-between">
      <RealtorFilters :filters="filters" class="mb-4 lg:mb-0" />
      <div class="mb-4 lg:mb-0">
        <Filters :filters="filters" />
      </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
      <div v-for="course in courses.data" :key="course.id">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
              <div class="text-2xl font-medium">{{ course.title }}</div>

            </div>
            <div class="flex items-center gap-1 text-gray-600 dark:text-gray-300">
              <a class="btn-outline text-xs font-medium hover:text-blue-800" :href="route('course.show', { course: course.id })" target="_blank">Preview</a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
              </svg>
              <Link class="btn-outline text-xs font-medium hover:text-blue-800" :href="route('realtor.course.edit', { course: course.id })">Edit</Link>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
              </svg>
              <Link class="btn-outline text-xs font-medium text-red-500 hover:text-red-800" :href="route('realtor.course.destroy', { course: course.id })" as="button" method="delete">Delete</Link>
            </div>
          </div>
          <div class="flex justify-between items-center mt-4">
            <div class="flex flex-col gap-1">
              <div class="text-sm text-gray-600 dark:text-gray-900">{{ course.category }}</div>
              <CourseAdresse :course="course" class="text-sm text-gray-600 dark:text-gray-900"/>
            </div>
            <div class="text-2xl font-medium">{{ course.Price }}$</div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="courses.data.length" class="w-full flex justify-center mt-4 mb-4">
      <Pagination :links="courses.links" />
    </div>
  </div>
</template>




<script setup>
import { Link } from '@inertiajs/inertia-vue3'

import RealtorFilters from '@/Pages/Realtor/Index/Components/RealtorFilters.vue'
import Pagination from '@/Components/UI/Pagination.vue'
import CourseAdresse from '@/Components/CourseAdresse.vue';
defineProps({courses: Object,
filters: Object})
</script>