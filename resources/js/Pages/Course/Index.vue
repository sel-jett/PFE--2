<template>
  <div v-for="course in courses.data" :key="course.id" :course="course">
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
<div v-if="courses.data.length" class="w-full flex justify-center mt-8 mb-8">
    <Pagination :links="courses.links" />
  </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import CourseAdresse from '@/Components/CourseAdresse.vue';
import Pagination from '@/Components/UI/Pagination.vue';
defineProps({
  courses: Object,
})
</script>

