<template>
  <div
    class="bg-white shadow-lg rounded-lg p-6 transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-300 max-w-md mx-auto"
  >
    <img
      :src="image"
      alt="Card Image"
      class="size-24 rounded-full mx-auto mb-4"
    />
    <p class="text-gray-700 text-base mb-4">
      <slot />
    </p>
    <h3 class="text-lg font-semibold text-right text-green-800">
      - {{ client }}
    </h3>
  </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue'

defineProps<{
  client: string
  image: string
}>()
</script>

<style scoped></style>
