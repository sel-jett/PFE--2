<template>
  <form @submit.prevent="register">
    <div >
      <div>
        <label for="name" >Your Name</label>
        <input
          id="name" v-model="form.name" type="text"
        />
        <div v-if="form.errors.name" >
          {{
            form.errors.name }}
        </div>
        <div>
        <label for="username" >Username</label>
        <input
          id="username" v-model="form.username" type="text"
        />
        <div v-if="form.errors.username" >
          {{
            form.errors.username }}
        </div>
      </div>
      </div>
      <div>
        <label for="email">E-mail</label>
        <input
          id="email" v-model="form.email" type="text"
        />
        <div v-if="form.errors.email">
          {{
            form.errors.email }}
        </div>
      </div>
      <div>
        <label for="password">Password</label>
        <input
          id="password" v-model="form.password"
          type="password"
        />
        <div
          v-if="form.errors.password"
          class="input-error"
        >
          {{ form.errors.password }}
        </div>
      </div>
      <div>
        <label for="password_confirmation">Confirm Password</label>
        <input
          id="password_confirmation" v-model="form.password_confirmation"
          type="password"
        />
      </div>
      <div>
    <label>
      Role:
      <select v-model="form.teacher">
        <option value="0">Student</option>
        <option value="1">Teacher</option>
      </select>
    </label>
      </div>
      <div>
        <button
          type="submit"
        >
          Create Account
        </button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
const form = useForm({
  name: null,
  username: null,
  email: null,
  password: null,
  password_confirmation: null,
  teacher: 0,
})
const register = () => form.post(route('user-account.store'))
</script>