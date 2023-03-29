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

    <div v-else class="md:col-span-7 flex flex-col gap-4">
      <Offer
        v-for="offer in course.offers" 
        :key="offer.id"
        :offer="offer"
        :course-price="course.price"
        :is-sold="course.sold_at != null"
      />
    </div>

     <div class="md:col-span-5">
      <Box>
        <template #header>Basic Info</template>
        <div
          class="text-2xl font-bold"
        > {{ course.price }} </div>

        <CourseAddress
          :course="course"
          class="text-gray-500"
        />
      </Box>
    </div>
  </section>
</template>

<script setup>
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
import Offer from '@/Pages/Realtor/Show/Components/Offer.vue'
const props = defineProps({ course: Object })
const hasOffers = computed(
  () => props.course.offers.length,
)
</script>