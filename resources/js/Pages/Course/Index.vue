<template>
  <div v-for="course in courses" :key="course.id">
    <Link :href="`/course/${course.id}`">
      <CourseAdresse :course="course" />
    </Link>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import CourseAdresse from '@/Components/CourseAdresse.vue';
defineProps({
  courses: Array,
})
</script>
