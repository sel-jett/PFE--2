<template>
  <form @submit.prevent="filter" class="my-8">
    <div class="flex flex-wrap justify-center gap-2">
      <div class="flex flex-wrap items-center bg-white rounded-lg shadow-md overflow-hidden">
        <input v-model.number="filterForm.priceFrom" type="text" placeholder="Price from" class="input-filter-l w-52 p-4 bg-transparent border-none outline-none text-gray-700" />
        <div class="border-r-2 border-gray-300 h-8"></div>
        <input v-model.number="filterForm.priceTo" type="text" placeholder="Price to" class="input-filter-r w-f52 p-4 bg-transparent border-none outline-none text-gray-700" />
      </div>

      <div class="relative">
        <select v-model="filterForm.category" class="input-filter-l w-40 p-4 bg-white rounded-lg shadow-md appearance-none border-none outline-none text-gray-700">
          <option :value="null">Category</option>
          <option :value="Mathematics">Mathematics</option>
          <option :value="Physics">Physics</option>
          <option :value="SVT">SVT</option>
        </select>
      </div>

      <button type="submit" class="btn-normal px-6 py-2 text-green-500 hover:text-green-800">Filter</button>
      <button type="reset" class="text-red-500 hover:text-red-800">Clear</button>
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