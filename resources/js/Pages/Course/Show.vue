<template>
  <div>
  <Box>
    <div>
       <div v-if="course.images.length" class="grid grid-cols-2 gap-1">
        <img
          v-for="image in course.images" :key="image.id"
          :src="image.src"
        />
      </div>
      <div v-else class="w-full text-center font-medium text-gray-500">No images</div>
    </div>
    <div>
      <CourseAdresse :course="course" />
    </div>
  </Box>
  <MakeOffer 
        v-if="user"
        :course-id="course.id" 
        :course="course"
      />
  </div>
</template>

<script setup>
import CourseAdresse from '@/Components/CourseAdresse.vue';
import MakeOffer from '@/Pages/Course/Show/Components/MakeOffer.vue'
import Box from '@/Components/UI/Box.vue'
import { usePage } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
defineProps({
  course: Object,
})
const page = usePage()
const user = computed(
  () => page.props.value.user,
)
</script>