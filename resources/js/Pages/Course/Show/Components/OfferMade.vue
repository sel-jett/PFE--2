<template>
  <Box>
    <template #header>Offer Made</template>

    <div  class="text-3xl">{{offer.amount}} </div>

    <section class="mt-2 flex flex-col md:flex-row justify-between text-gray-500">
      <div>Made on</div>
      <div class="font-medium">{{ offerMadeOn }}</div>
    </section>
  </Box>
</template>

<script setup>
import { computed } from 'vue'
import Box from '@/Components/UI/Box.vue'
const props = defineProps({
  offer: Object,
  course: Object,
})
const offerMadeOn = computed(
  () => new Date(props.offer.created_at).toDateString(),
)
</script>