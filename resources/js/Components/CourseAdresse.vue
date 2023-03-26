<template>
  <span>
    {{ course.Course_name }} {{ course.Category }}, for ${{ course.Price }}
  </span>
</template>

<script setup>
defineProps({
  course: Object,
})
</script>