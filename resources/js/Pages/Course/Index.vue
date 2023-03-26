<template>
  <div v-for="course in courses" :key="course.id">
    <div>
        <Link :href="`/course/${course.id}`">
            <CourseAdresse :course="course" />
        </Link>
    </div>
    <div>
        <Link :href="`/course/${course.id}/edit`" as="button">Edit</Link>
    </div>
    <div>
        <Link :href="`/course/${course.id}`" method="DELETE" as="button">Delete</Link>
    </div>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import CourseAdresse from '@/Components/CourseAdresse.vue';
defineProps({
  courses: Array,
})
</script>
