<template>
  <div class="flex font-bold justify-between">
    <div class="">
      {{ course.category }}
    </div>
    <div class="text-right">
      {{ course.Price }}<span class="text-green-600"> MAD</span>
    </div>
  </div>
  <div class="border-b my-2"></div>
  <div class="font-medium">
    {{ course.Course_name }}
  </div>
  <div class="text-gray-600 italic text-sm">
    {{ course.Description }}
  </div>
</template>

<script setup>
defineProps({
  course: Object,
})
</script>