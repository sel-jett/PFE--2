<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Course Name</label>
        <input v-model="form.course_name" type="text" />
        <div v-if="form.errors.course_name">
          {{ form.errors.course_name }}
        </div>
      </div>

      <div>
        <label>Category</label>
        <input v-model="form.category" type="text" />
        <div v-if="form.errors.category">
          {{ form.errors.category }}
        </div>
      </div>

      <div>
        <label>Description</label>
        <input v-model="form.description" type="text" />
        <div v-if="form.errors.description">
          {{ form.errors.description }}
        </div>
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
        <div v-if="form.errors.price">
          {{ form.errors.price }}
        </div>
      </div>

      <div>
        <button  type="submit">Edit</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
  course: Object,
})
const form = useForm({
  course_name: props.course.course_name,
  category: props.course.category,
  description: props.course.description,
  price: props.course.price,
})
const update = () => form.put(route('realtor.course.update',{course: props.course.id}))
</script>

<style scoped>
label {
  margin-right: 2em;
}
div {
  padding: 2px
}
</style>