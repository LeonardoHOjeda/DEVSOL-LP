<template>
  <h2 class="text-3xl font-bold text-center">{{ props.title }}</h2>
  <p class="text-center text-gray-500 text-xl">{{ props.subtitle }}</p>
  <div class="flex gap-3 justify-center mt-5">
    <template v-if="design === 'design1'">
      <hr class="border-4 w-48 border-primary-600 rounded-xl" />
      <hr class="border-4 w-8 border-primary-600 rounded-xl" />
    </template>
    <template v-else-if="design === 'design2'">
      <hr class="border-4 w-8 border-primary-600 rounded-xl" />
      <hr class="border-4 w-48 border-primary-600 rounded-xl" />
      <hr class="border-4 w-8 border-primary-600 rounded-xl" />
    </template>
    <template v-else-if="design === 'design3'">
      <hr class="border-4 w-[20%] border-primary-600 rounded-xl" />
    </template>
    <template v-else-if="design === 'design4'">
      <hr class="border-8 w-32 border-primary-400 rounded-full" />
      <hr class="border-8 w-16 border-primary-400 rounded-full" />
    </template>
  </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue'

const props = withDefaults(
  defineProps<{
    title?: string
    subtitle?: string
    design: 'design1' | 'design2' | 'design3' | 'design4'
  }>(),
  {
    title: '',
    subtitle: '',
    design: 'design1',
  },
)
</script>
