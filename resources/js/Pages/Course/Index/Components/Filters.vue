<template>
  <form @submit.prevent="filter">
    <div class="mb-8 mt-4 flex flex-wrap gap-2">
      <div class="flex flex-nowrap items-center">
        <input
        v-model.number="filterForm.priceFrom"
          type="text" placeholder="Price from"
          class="input-filter-l w-28"
        />
        <input
        v-model.number="filterForm.priceTo"
          type="text" placeholder="Price to" 
          class="input-filter-r w-28"
        />
      </div>

      <div class="flex flex-nowrap items-center">
        <select v-model="filterForm.category" class="input-filter-l w-28">
          <option :value="null">Category</option>
          <option :value="Mathematics">Mathematics</option>
          <option :value="Physics">Physics</option>
          <option :value="SVT">SVT</option>
        </select>
      </div>


      <button type="submit" class="btn-normal">Filter</button>
      <button type="reset">Clear</button>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3'
const props = defineProps({
  filters: Object,
})
const filterForm = useForm({
  priceFrom: props.filters.priceFrom ?? null,
  priceTo: props.filters.priceTo ?? null,
  category: props.filters.category ?? null,
})
const filter = () => {
  filterForm.get(
    route('course.index'),
    {
      preserveState: true,
      preserveScroll: true,
    },
  )
}
const clear = () => {
  filterForm.priceFrom = null
  filterForm.priceTo = null
  filterForm.category = null
  filter()
}
</script>