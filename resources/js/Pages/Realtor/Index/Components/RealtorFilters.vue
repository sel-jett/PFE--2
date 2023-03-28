<template>
  <form class="m-auto">
    <div class="flex flex-wrap items-center justify-center gap-4 mb-4 mt-4">
      <div class="flex flex-nowrap items-center gap-2">
        <input
          id="deleted"
          v-model="filterForm.deleted"
          type="checkbox"
          class="h-4 w-4 rounded border-blue-600 text-blue-600 focus:ring-blue-500"
        />
        <label for="deleted" class="text-gray-700 dark:text-gray-200">Deleted</label>
      </div>
      <div class="flex flex-wrap items-center gap-2">
        <div class="relative">
          <select
            v-model="filterForm.by"
            class="appearance-none w-28 py-2 pl-3 pr-8 border-2 border-blue-600 rounded-lg text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:border-blue-500"
          >
            <option value="created_at">Added</option>
            <option value="price">Price</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-200">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
              <path d="M10 12l-6-6h12z" />
            </svg>
          </div>
        </div>
        <div class="relative">
          <select
            v-model="filterForm.order"
            class="appearance-none w-32 py-2 pl-3 pr-8 border-2 border-blue-600 rounded-lg text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:border-blue-500"
          >
            <option
              v-for="option in sortOptions"
              :key="option.value"
              :value="option.value"
            >
              {{ option.label }}
            </option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-200">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
              <path d="M10 12l-6-6h12z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>


<script setup>
import { reactive, watch, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { debounce } from 'lodash'

// reactive / ref / computed
const sortLabels = {
  created_at: [
    {
      label: 'Latest',
      value: 'desc',
    },
    {
      label: 'Oldest',
      value: 'asc',
    },
  ],
  price: [
    {
      label: 'Pricey',
      value: 'desc',
    },
    {
      label: 'Cheapest',
      value: 'asc',
    },
  ],
}
const filterForm = reactive({
  deleted: props.filters.deleted ?? false,
  by: props.filters.by ?? 'created_at',
  order: props.filters.order ?? 'desc',
})

const sortOptions = computed(() => sortLabels[filterForm.by])

const props = defineProps({
  filters: Object,
})

watch(
  filterForm, debounce(() => Inertia.get(
    route('realtor.course.index'),
    filterForm,
     { preserveState: true, preserveScroll: true },
  ), 1000),
)
</script>