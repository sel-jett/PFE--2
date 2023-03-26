<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Course Name</label>
        <input v-model="form.Course_name" type="text" />
        <div v-if="form.errors.Course_name">
          {{ form.errors.Course_name }}
        </div>
      </div>

      <div>
        <label>Category</label>
        <input v-model="form.Category" type="text" />
        <div v-if="form.errors.Category">
          {{ form.errors.Category }}
        </div>
      </div>

      <div>
        <label>Description</label>
        <input v-model="form.Description" type="text" />
        <div v-if="form.errors.Description">
          {{ form.errors.Description }}
        </div>
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.Price" type="text" />
        <div v-if="form.errors.Price">
          {{ form.errors.Price }}
        </div>
      </div>

      <div>
        <button type="submit">Edit</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
  listing: Object,
})
const form = useForm({
  Course_name: props.course.Course_name,
  Category: props.course.Category,
  Description: props.course.Description,
  Price: props.course.price,
})
const update = () => form.put(`/course/${props.course.id}`)
</script>

<style scoped>
label {
  margin-right: 2em;
}
div {
  padding: 2px
}
</style>