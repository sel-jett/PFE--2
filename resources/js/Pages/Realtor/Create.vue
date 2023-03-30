<template>
  <form @submit.prevent="create" class="flex justify-around my-6">
    <div class="w-1/3 ">
      <div>
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Title</label>
        <input v-model="form.Course_name" type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="les fonctions continues "/>
        <div v-if="form.errors.Course_name">
          {{ form.errors.Course_name }}
        </div>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select v-model="form.Category" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="Mathematics">Mathematics</option>
          <option value="SVT">Life and Earth Sciences</option>
          <option value="Physics">Physics and Chemistry</option>
          <option value="Philosophy">Philosophy</option>
          <option value="English">English</option>
        </select>
          <div v-if="form.errors.Category">
          {{ form.errors.Category }}
        </div>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea v-model="form.Description" type="text"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe the course...."/>
        <div v-if="form.errors.Description">
          {{ form.errors.Description }}
        </div>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Price</label>
        <input v-model.number="form.Price" type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="120 $"/>
        <div v-if="form.errors.Price">
          {{ form.errors.Price }}
        </div>
      </div>
    </div>
      <div class="text-center">
        <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-12 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Submit</button>
      </div>
    </div>
    <div class="flex items-center justify-center w-1/2">
      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-80 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">mp4, mov, wmv, avi, mkv, webm.</p>
          </div>
          <input id="dropzone-file" type="file" class="hidden" />
      </label>
    </div>  
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const form = useForm({
  Category: null,
  Course_name: null,
  Description: null,
  Price: 0,
})
const create = () => form.post(route('realtor.course.store'))
</script>

<style scoped>
label {
  margin-right: 2em;
}
div {
  padding: 2px
}
</style>