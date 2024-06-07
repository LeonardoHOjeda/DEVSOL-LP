<template>
  <Head title="Inicio" />
  <Navbar />
  <div
    class="relative h-[500px] bg-fixed bg-cover bg-bottom"
    style="background-image: url('images/coworking.jpg')"
  >
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="text-center">
        <h1 class="text-4xl font-bold text-white">
          Bienvenido a DevSolutionsMX
        </h1>
        <p class="text-lg text-white">
          Desarrollamos soluciones a la medida de tus necesidades
        </p>
        <div class="mt-4">
          <a
            href="#contact"
            class="inline-block px-6 py-3 text-lg font-semibold text-white bg-primary-500 rounded-lg shadow-lg hover:bg-primary-600"
          >
            ¡Hablemos de tu proyecto!
          </a>
        </div>
      </div>
    </div>
  </div>
  <section id="who">
    <div class="container mx-auto py-12">
      <Title title="¿Quiénes Somos?" />
      <p class="mt-6 text-lg text-center">
        Somos una empresa de desarrollo web que se especializa en la creación de
        sitios web para pequeñas y medianas empresas.
      </p>
      <p class="mt-3 text-lg text-center">
        Nuestro objetivo es ayudarte a tener presencia en internet y atraer más
        clientes a tu negocio.
      </p>

      <!-- Agrega un parrafo con informacion destacada indicando que creemos que cada negocio debe tener presencia en linea -->
      <p
        class="mt-3 text-lg text-center text-primary-600 font-bold bg-yellow-300 w-fit mx-auto px-2 py-2 rounded-xl"
      >
        Creemos que cada negocio debe tener presencia en línea para llegar a más
        clientes y aumentar sus ventas.
      </p>
    </div>
  </section>
  <section id="services">
    <div class="container mx-auto py-12">
      <Title title="Nuestros Servicios" />
      <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
        <Card title="Diseño Web" image="/images/web-design.png">
          Diseñamos sitios web atractivos y funcionales para tu negocio
        </Card>
        <Card title="Desarrollo Web" image="/images/web-development.png">
          Desarrollamos aplicaciones web a la medida de tus necesidades
        </Card>
        <Card title="Mantenimiento Web" image="/images/web-maintenance.png">
          Ofrecemos mantenimiento a tu sitio web para que siempre esté
          actualizado
        </Card>
        <Card title="Marketing Digital" image="/images/marketing.png">
          Creamos campañas de marketing digital para atraer más clientes a tu
          negocio
        </Card>
        <Card title="SEO" image="/images/seo.png">
          Posicionamos tu sitio web en los primeros lugares de los motores de
          búsqueda
        </Card>
      </div>
    </div>
  </section>
  <section id="whyus">
    <div class="container mx-auto py-12">
      <Title title="¿Por qué elegirnos?" />
      <p class="mt-6 text-lg text-center">
        En DevSolutionsMX nos preocupamos por la satisfacción de nuestros
        clientes y nos esforzamos por ofrecer un servicio de calidad.
      </p>
      <p class="mt-3 text-lg text-center">
        Nuestro equipo de profesionales está capacitado para ayudarte a alcanzar
        tus objetivos en internet.
      </p>
    </div>
  </section>
  <section id="clients">
    <div class="container mx-auto py-12">
      <Title title="Palabras de nuestros clientes" design="design3" />
      <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
        <CardReview client="TecNM en Celaya" image="images/itc-logo.png">
          "La Semana Lince 2022 y 2024 fue un éxito gracias al arduo trabajo de
          DevSolutionsMX."
        </CardReview>
        <CardReview
          client="Cliente 2"
          image="https://via.assets.so/album.png?id=1&q=95&w=360&h=360&fit=fill
"
        >
          "Me ayudaron a entender mejor cómo tener presencia en internet. Muy
          contento con los resultados."
        </CardReview>
        <CardReview client="Cliente 3" image="/images/client3.jpg">
          "La experiencia fue muy positiva. El equipo es profesional y se
          aseguraron de que todo funcionara perfectamente."
        </CardReview>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container mx-auto py-12 w-[50%]">
      <Title
        title="¡Hablemos de tu proyecto!"
        subtitle="Cuéntanos de tu proyecto, juntos lo haremos realidad."
      />
      <p
        v-if="successMessage"
        class="mt-4 text-center text-primary-500 bg-green-300 px-2 py-2.5 rounded-xl"
      >
        {{ successMessage }}
      </p>
      <form action="" @submit.prevent="submitForm">
        <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
          <div>
            <label for="name" class="block text-lg font-semibold">
              Nombre
            </label>
            <input
              v-model="form.name"
              type="text"
              id="name"
              name="name"
              class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-primary-500"
            />
            <InputError class="mt-2" :message="form.errors.name" />
          </div>
          <div>
            <label for="subject" class="block text-lg font-semibold">
              Asunto
            </label>
            <input
              v-model="form.subject"
              type="text"
              id="subject"
              name="subject"
              class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-primary-500"
            />
            <InputError class="mt-2" :message="form.errors.subject" />
          </div>
          <div>
            <label for="phone" class="block text-lg font-semibold">
              Teléfono
            </label>
            <input
              v-model="form.phone"
              type="tel"
              id="phone"
              name="phone"
              class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-primary-500"
            />
            <InputError class="mt-2" :message="form.errors.phone" />
          </div>
          <div>
            <label for="email" class="block text-lg font-semibold">
              Correo Electrónico
            </label>
            <input
              v-model="form.email"
              type="email"
              id="email"
              name="email"
              class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-primary-500"
            />
            <InputError class="mt-2" :message="form.errors.email" />
          </div>
          <div class="md:col-span-2">
            <label for="message" class="block text-lg font-semibold">
              Mensaje
            </label>
            <textarea
              v-model="form.message"
              id="message"
              name="message"
              class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-primary-500"
            ></textarea>
            <InputError class="mt-2" :message="form.errors.message" />
          </div>
          <div class="md:col-span-2">
            <button
              type="submit"
              class="w-full px-6 py-3 text-lg font-semibold text-white bg-primary-500 rounded-lg shadow-lg hover:bg-primary-600"
            >
              Enviar
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <Footer />
</template>

<script setup lang="ts">
import { Head, useForm, usePage } from '@inertiajs/vue3'
import Card from '@/Components/Card.vue'
import CardReview from '@/Components/CardReview.vue'
import Footer from '@/Components/Footer.vue'
import InputError from '@/Components/InputError.vue'
import Navbar from '@/Components/Navbar.vue'
import Title from '@/Components/Title.vue'

const { props } = usePage()

const form = useForm({
  name: '',
  subject: '',
  phone: '',
  email: '',
  message: '',
})

let successMessage: string | null = null

const submitForm = async () => {
  try {
    const response: any = await form.post(route('contact.submit'), {
      preserveState: true,
    })
    form.reset()
    console.log('response', response)
    successMessage =
      'Se ha enviado tu correo correctamente. En breve nos pondremos en contacto contigo.'
  } catch (error: any) {
    console.log(error)
  }
}
</script>
