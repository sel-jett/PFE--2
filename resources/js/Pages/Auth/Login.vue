<template>
  <form @submit.prevent="login">
    <div >
      <div>
        <label for="username">Username</label>
        <input id="username" v-model="form.username" type="text"  />
        <div v-if="form.errors.username" class="input-error">{{ form.errors.username }}</div>
      </div>
      <div >
        <label for="password" >Password</label>
        <input id="password" v-model="form.password" type="password"  />
        <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
      </div>
      <div >
        <button  type="submit">Login</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const form = useForm({
  username: null,
  password: null,
})
const login = () => form.post(route('login.store'))
</script>