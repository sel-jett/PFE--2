<template>
  <div v-for="course in courses" :key="course.id">
    <div>
        <Link :href="route('course.show',{course: course.id})">
            <CourseAdresse :course="course" />
        </Link>
    </div>
    <div>
        <Link :href="route('course.edit',{course: course.id})" as="button">Edit</Link>
    </div>
    <div>
        <Link :href="route('course.destroy',{course: course.id})" method="DELETE" as="button">Delete</Link>
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
