<template>
  <Filters :filters="filters"/>
  <div v-for="course in courses.data" :key="course.id" :course="course">
    <div>
        <Link :href="route('course.show',{course: course.id})">
            <CourseAdresse :course="course" />
        </Link>
    </div>
  </div>
<div v-if="courses.data.length" class="w-full flex justify-center mt-8 mb-8">
    <Pagination :links="courses.links" />
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

