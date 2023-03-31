<template>
  <div class="flex  mt-4 flex-col-reverse md:grid md:grid-cols-12 gap-4">
  <Box v-if="course.images.length" class="md:col-span-7 flex items-center">
       <div class="grid grid-cols-2 gap-1">
        <img
          v-for="image in course.images" :key="image.id"
          :src="image.src"
        />
      </div>
     </Box>
     <EmptyState v-else class="md:col-span-7 flex items-center">No images</EmptyState>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>
          Basic info
        </template>
      <CourseAdresse :course="course" />
       </Box>

      <Box>
        <template #header>
          Monthly Payment
        </template>
         <label class="label">Duration (years)</label>
         <div class="mt-2 text-gray-500">
            <div class="flex justify-between">
              <div>Total paid</div>
              <div>
                <Price :price="totalPaid" class="font-medium" />
              </div>
            </div>
            <div class="flex justify-between">
              <div>Principal paid</div>
              <div>
                <div class="font-medium" > {{course.Price}}</div>
              </div>
            </div>
            <div class="flex justify-between">
              <div>With Student Discount</div>
              <div>
                <div class="font-medium" >{{course.Price-50}}</div>
              </div>
            </div>
          </div>
         </Box>
  <MakeOffer 
        v-if="user && !offerMade"
        :course-id="course.id" 
        :course="course"
      />
      <OfferMade v-if="user && offerMade" :offer="offerMade" />
  </div>
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