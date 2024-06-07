<template>
  <button
    :class="`${variants[props.variant]} ${props.class}`"
    class="font-medium rounded-md px-5 py-1.5 disabled:cursor-not-allowed w-full md:w-fit whitespace-nowrap transition-all duration-100"
  >
    <slot />
  </button>
</template>

<script setup lang="ts">
const props = withDefaults(
  defineProps<{
    class?: string
    variant?:
      | 'primary'
      | 'primary-outline'
      | 'secondary'
      | 'danger'
      | 'warning'
      | 'success'
    disabled: Boolean
    onClick: Function
  }>(),
  {
    class: '',
    variant: 'primary',
    disabled: Boolean,
    onClick: Function,
  },
)

const variants = {
  primary:
    'text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:ring-blue-300 disabled:bg-primary-200 disabled:text-gray-700 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-500 dark:disabled:bg-primary-800 dark:disabled:text-gray-300',
  'primary-outline':
    'text-primary-500 bg-transparent border border-primary-500 hover:bg-primary-500 hover:text-white focus:ring-4 focus:ring-blue-300 disabled:bg-primary-200 disabled:text-gray-700',
  secondary: 'bg-gray-500 hover:bg-gray-700',
  danger: 'bg-red-500 hover:bg-red-700',
  warning: 'bg-yellow-500 hover:bg-yellow-700',
  success: 'bg-green-500 hover:bg-green-700',
}
</script>

<style scoped></style>
