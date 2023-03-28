<template>
  <Filters :filters="filters" class="mb-8"/>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <div v-for="course in courses.data" :key="course.id" :course="course" class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="p-4">
        <Link :href="route('course.show',{course: course.id})">
          <CourseAdresse :course="course" class="text-gray-700 font-medium hover:text-indigo-600"/>
        </Link>
      </div>
    </div>
  </div>
  <div v-if="courses.data.length" class="w-full flex justify-center mt-8 mb-8">
    <Pagination :links="courses.links" class="flex items-center space-x-2"/>
  </div>
</template>


<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import CourseAdresse from '@/Components/CourseAdresse.vue';
import Pagination from '@/Components/UI/Pagination.vue';
import Filters from '../Course/Index/Components/Filters.vue';
defineProps({
  courses: Object,
  filters: Object,
})
</script>

