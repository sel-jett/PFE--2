<template>
  <Box>
    <template #header>Offer #{{ offer.id }} <span v-if="offer.accepted_at" class="dark:bg-green-900 dark:text-green-200 bg-green-200 text-green-900 p-1 rounded-md uppercase ml-1">accepeted</span></template>

    <section class="flex items-center justify-between">
      <div>
        <div  class="text-xl"> {{ offer.amount }} </div>

        <div class="text-gray-500">
          Difference {{ difference }}
        </div>

        <div class="text-gray-500 text-sm">
          Offer by {{ offer.bidder.name }}
        </div>

        <div class="text-gray-500 text-sm">
          Made on {{ madeOn }}
        </div>
      </div>
      <div>
        <Link
          v-if="!isSold"
          class="btn-outline text-xs font-medium" 
          as="button" method="put"
        >
          Accept
        </Link>
      </div>
    </section>
  </Box>
</template>

<script setup>
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'
const props = defineProps({
  offer: Object,
  coursePrice: Number,
  isSold: Boolean,
})
const difference = computed(
  () => props.offer.amount - props.coursePrice,
)
const madeOn = computed(
  () => new Date(props.offer.created_at).toDateString(),
)


</script>