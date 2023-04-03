<template>

  <div>
    <div>Upload New Videos</div>
    <form @submit.prevent="upload">
      <section class="flex items-center gap-2 my-4">
        <input
          class="border rounded-md file:px-4 file:py-2 border-gray-200 dark:border-gray-700 file:text-gray-700 file:dark:text-gray-400 file:border-0 file:bg-gray-100 file:dark:bg-gray-800 file:font-medium file:hover:bg-gray-200 file:dark:hover:bg-gray-700 file:hover:cursor-pointer file:mr-4"
          type="file" multiple @input="addFiles"
        />
        <button
          type="submit"
          class="btn-outline disabled:opacity-25 disabled:cursor-not-allowed"
        >
          Upload
        </button>
        <button
          type="reset" class="btn-outline"
          @click="reset"
        >
          Reset
        </button>
      </section>
    </form>
  </div>
</template>




<script setup>
import { useForm, Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import NProgress from 'nprogress'
const props = defineProps({ course: Object })
Inertia.on('progress', (event) => {
  if (event.detail.progress.percentage) {
    NProgress.set((event.detail.progress.percentage / 100) * 0.9)
  }
})
const form = useForm({
  video: null,
})
const upload = () => {
  form.post(
    route('realtor.course.video.store', { course: props.course.id }),
  )
}
const reset = () => form.reset('video')

</script>