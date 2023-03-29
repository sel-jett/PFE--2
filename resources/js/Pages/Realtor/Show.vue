<template>
  <div class="mb-4">
    <Link 
      :href="route('realtor.course.index')"
    >
      ← Go back to Courses
    </Link>
  </div>

  <section class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <Box v-if="!hasOffers" class="flex md:col-span-7 items-center">
      <div class="w-full text-center font-medium text-gray-500">
        No offers
      </div>
    </Box>

    <div v-else class="md:col-span-7 items-center">
      <Offer
        v-for="offer in course.offers" 
        :key="offer.id" class="mb-4"
        :offer="offer"
        :course-price="course.price"
      />
    </div>

    <Box class="md:col-span-5">
      <template #header>Basic Info</template>
      <Price :price="course.price" class="text-2xl font-bold" />
      <CourseAdresse :course="course" class="text-gray-500" />
    </Box>
  </section>
</template>

<script setup>
import CourseAdresse from '@/Components/CourseAdresse.vue'
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
import Offer from '@/Pages/Realtor/Show/Components/Offer.vue'
const props = defineProps({ course: Object })
const hasOffers = computed(
  () => props.course.offers.length,
)
</script>