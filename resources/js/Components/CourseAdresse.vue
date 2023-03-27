<template>
  <span>
    {{ course.Course_name }}, {{ course.category }}, for ${{ course.Price }}
  </span>
</template>

<script setup>
defineProps({
  course: Object,
})
</script>