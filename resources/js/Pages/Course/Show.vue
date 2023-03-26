<template>
  <div>
    <CourseAdresse :course="course" />
  </div>
</template>

<script setup>
import CourseAdresse from '@/Components/CourseAdresse.vue';
defineProps({
  course: Object,
})
</script>