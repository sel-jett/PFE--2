<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Category</label>
        <input v-model="form.Category" type="text" />
        <div v-if="form.errors.Category">
            {{ form.errors.Category }}
        </div>
      </div>

      <div>
        <label>Course Name</label>
        <input v-model="form.Course_name" type="text" />
        <div v-if="form.errors.Course_name">
            {{ form.errors.Course_name }}
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
        <button type="submit">Create</button>
      </div>
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