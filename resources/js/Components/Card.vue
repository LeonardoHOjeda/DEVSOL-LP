<template>
  <div
    class="bg-white shadow-lg rounded-lg p-6 transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-300"
  >
    <img
      :src="image"
      alt="Card Image"
      class="size-16 mx-auto mb-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"
    />
    <h3 class="text-xl font-semibold text-center">{{ title }}</h3>
    <slot />
  </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue'

defineProps<{
  title: string
  image: string
}>()
</script>

<style scoped></style>
