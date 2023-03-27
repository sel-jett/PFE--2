<template>
  <h1 class="text-3xl mb-4">Your Courses</h1>
  <section>
    <RealtorFilters :filters="filters"/>
  </section>
  <section class="mb-8">
    <!-- <Filters :filters="filters"/> -->
  </section>
  <section class="grid grid-cols-1 lg:grid-cols-2 gap-2">
    <div v-for="course in courses.data" :key="course.id">
      <div class="flex flex-col md:flex-row gap-2 md:items-center justify-between">
        <div>
          <div class="xl:flex items-center gap-2">
            <div class="text-2xl font-medium">{{ course.Price }}</div>
          </div>
          <CourseAdresse :course="course" />
        </div>
        <div class="flex items-center gap-1 text-gray-600 dark:text-gray-300">
          <Link>Preview</Link>
          <Link>Edit</Link>
          <Link
            class="btn-outline text-xs font-medium" 
            :href="route('realtor.course.destroy', { course: course.id })" 
            as="button" method="delete"
          >
            Delete
          </Link>
        </div>
      </div>
    </div>
  </section>
  <section v-if="courses.data.length" class="w-full flex justify-center mt-4 mb-4">
    <Pagination :links="courses.links" />
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import CourseAdresse from '@/Components/CourseAdresse.vue'
import Filters from '../Course/Index/Components/Filters.vue'
import RealtorFilters from '@/Pages/Realtor/Index/Components/RealtorFilters.vue'
import Pagination from '@/Components/UI/Pagination.vue'
defineProps({courses: Object,
filters: Object})
</script>