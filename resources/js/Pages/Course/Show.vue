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
     <EmptyState v-else class="md:col-span-7 flex items-center">No images</EmptyState>
    </div>
    <div>
      <CourseAdresse :course="course" />
    </div>
  </Box>
  <MakeOffer 
        v-if="user && !offerMade"
        :course-id="course.id" 
        :course="course"
      />
      <OfferMade v-if="user && offerMade" :offer="offerMade" />
  </div>
</template>

<script setup>
import CourseAdresse from '@/Components/CourseAdresse.vue';
import MakeOffer from '@/Pages/Course/Show/Components/MakeOffer.vue'
import Box from '@/Components/UI/Box.vue'
import { usePage } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
import OfferMade from './Show/Components/OfferMade.vue'
import EmptyState from '@/Components/UI/EmptyState.vue'
defineProps({
  course: Object,
  offerMade: Object,
})
const page = usePage()
const user = computed(
  () => page.props.value.user,
)
</script>