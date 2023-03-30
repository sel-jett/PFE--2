<template>
    You need to verify your Email First
    <div>
        <Link :href="route('verification.send')" as="button" method="post" class="
        text-indigo-600 dark:text-indigo-400">Resend Verification Email</Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>