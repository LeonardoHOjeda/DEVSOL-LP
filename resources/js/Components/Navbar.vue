<template>
  <div>
    <nav class="bg-primary-600 border-primary-500">
      <div class="flex flex-wrap items-center justify-evenly mx-auto p-4">
        <a
          href="/"
          class="text-2xl font-bold text-white flex items-center space-x-3 rtl:space-x-reverse"
        >
          <img
            src="/images/devsolutions-logo.png"
            alt="Logo DevSolutions"
            class="size-14"
          />
          <span class="ml-2">DevSolutions</span>
        </a>
        <button
          data-collapse-toggle="navbar-default"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-default"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto">
          <div class="flex flex-col items-center md:flex-row md:space-x-6">
            <Link href="/" class="text-white">Inicio</Link>
            <Link
              @click="scrollToWho"
              href="#who"
              class="text-white transition duration-500 ease-in-out"
              >¿Quiénes Somos?
            </Link>
            <Link
              href="#services"
              class="text-white transition duration-500 ease-in-out"
              >Nuestros Servicios
            </Link>
            <Link
              href="#whyus"
              class="text-white transition duration-500 ease-in-out"
              >¿Por qué elegirnos?
            </Link>
            <Link
              href="#contact"
              class="text-white transition duration-500 ease-in-out"
              >Contacto
            </Link>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

const scrollToWho = () => {
  const element = document.getElementById('who')
  element?.scrollIntoView({ behavior: 'smooth' })
}
</script>

<style scoped></style>
