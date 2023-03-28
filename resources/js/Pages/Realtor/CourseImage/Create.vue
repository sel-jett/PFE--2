<template>

  <form method="POST" :action="route('realtor.course.image.store', { course: course.id })">
    <input type="file" multiple name="files" />
    <button type="submit">Send</button>
  </form>

</template>




<script setup>

defineProps({ course: Object })

</script>