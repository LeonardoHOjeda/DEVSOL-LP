@extends('layouts.layout')

@section('title', 'DevSolutions MX')

@section('content')
  <div class="min-h-screen">
    <div class="relative h-96 bg-fixed bg-cover bg-center" style="background-image: url('images/home.jpg');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center text-center">
        <h1 class="text-6xl text-white font-bold">
          Soluciones Web para tu Negocio
        </h1>
      </div>
    </div>
    <div class="mt-10 md:w-[80%] mx-auto">
      <x-title>¿Quiénes somos?</x-title>
      <div class="flex flex-col-reverse md:flex-row justify-between items-center w-full mx-auto">
        <img src="images/team-work.png" alt="Trabajo en equipo" class="h-80 p-0 m-0">
        <div class="w-[60%] mt-5">
          <p class="text-lg ">
            Somos una empresa de desarrollo web que se especializa en la creación de sitios web para pequeñas y medianas empresas.
          </p>
          <p class="text-lg mt-5">
            Creemos que cada negocio merece tener una presencia en línea efectiva y atractiva, por lo que nos esforzamos por ofrecer soluciones de diseño y desarrollo web de alta calidad a precios asequibles.
          </p>  
        </div>
      </div>
    </div>

    <div class="relative h-96 bg-fixed bg-cover bg-center" style="background-image: url('images/computers.jpg');">
      <div class="absolute inset-0 bg-black bg-opacity-50">
        <h2 class="text-white text-4xl text-center mt-10">Nuestros Servicios</h2>
          <div class="flex flex-col gap-3 mt-10 md:mx-10 md:flex-row md:justify-evenly">
            <x-card>
              <x-slot name="imageUrl">"images/web-design.png"</x-slot>
              Diseño Web
            </x-card>

            <x-card>
              <x-slot name="imageUrl">"images/web-development.png"</x-slot>
              Desarrollo Web
            </x-card>

            <x-card>
              <x-slot name="imageUrl">"images/web-maintenance.png"</x-slot>
              Mantenimiento Web
            </x-card>

            <x-card>
              <x-slot name="imageUrl">"images/marketing.png"</x-slot>
              Marketing Digital
            </x-card>

            <x-card>
              <x-slot name="imageUrl">"images/seo.png"</x-slot>
              SEO
            </x-card>

          </div>

      </div>
    </div>

    <div class="my-10 w-[80%] mx-auto">
      <x-title>Por qué elegirnos?</x-title>
      <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10">
        <div class="p-4 rounded-3xl mx-auto mt-10 border-2 shadow-lg">
          <img src="images/profesional.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Experiencia y Profesionalismo</h3>
          <hr class="border-4 rounded-lg border-primary w-10 mx-auto my-3">
          <p class="text-lg text-center">Contamos con un equipo de profesionales con años de experiencia en el diseño y desarrollo web.</p>
          <p class="text-lg text-center">Hemos trabajado con una amplia variedad de negocios, desde pequeñas startups hasta empresas establecidas, ayudándolas a alcanzar sus objetivos digitales.
          </p>
        </div>
        
        <div class="p-4 rounded-3xl mx-auto mt-10 border-2 shadow-lg">
          <img src="images/custom.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Soluciones Personalizadas</h3>
          <hr class="border-4 rounded-lg border-black w-10 mx-auto my-3">
          <p class="text-lg text-center">Cada negocio es único, por eso ofrecemos soluciones a medida que se ajustan a tus necesidades específicas.</p>
          <p class="text-lg text-center">Nos aseguramos de que cada aspecto de tu proyecto esté perfectamente alineado con tu visión y metas.
          </p>
        </div>
  
        <div class="p-4 rounded-3xl mx-auto mt-10 border-2 shadow-lg">
          <img src="images/technology.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Innovación y Tecnología</h3>
          <hr class="border-4 rounded-lg border-black w-10 mx-auto my-3">
          <p class="text-lg text-center">
            Utilizamos las últimas tecnologías y herramientas de desarrollo para crear sitios web modernos y eficientes.
          </p>
          <p class="text-lg text-center">
            Nos mantenemos al día con las tendencias y avances en tecnología web para ofrecerte siempre lo mejor.
          </p>
        </div>
  
        <div class="p-4 rounded-3xl mx-auto mt-10 border-2 shadow-lg">
          <img src="images/warranty.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Satisfacción Garantizada</h3>
          <hr class="border-4 rounded-lg border-black w-10 mx-auto my-3">
          <p class="text-lg text-center">
            La satisfacción de nuestros clientes es nuestra principal prioridad. Nos esforzamos por asegurar que cada cliente esté contento con el resultado final.
          </p>
          <p class="text-lg text-center">
            Nuestros clientes avalan nuestro trabajo y muchos nos recomiendan debido a su satisfacción con nuestros servicios.
          </p>
        </div>
      </div>
    </div>

    <div class="my-10 mx-auto bg-primary md:w-[80%] md:rounded-3xl">
      <h2 class="text-4xl text-center text-white pt-10">Contáctanos</h2>
      <hr class="border-2 border-white w-[40%] mx-auto my-5">
      <div class="flex  flex-col md:flex-row px-16">
        <div class="w-full md:w-1/2 ml-5 flex flex-col">
          <div>
            <h3 class="text-white text-3xl">Correo:</h3>
            <a class="text-white" href="mailto:contacto@devsolutions.mx">contacto@devsolutions.mx</a>
          </div>
          <div class="mt-5">
            <h3 class="text-white text-3xl">Telefono:</h3>
            <p class="text-white">442-222-222</p>
          </div>
        </div>
        <div id="contact-form" class="w-full md:w-1/2 p-4">
          @if ($errors->any())
            <div class="bg-red-300 text-white p-4 rounded-lg mb-4">
              <ul>
                @foreach ($errors->all() as $error)
                  <li class="text-black">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if ($errors->any())
              <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });
                  });
              </script>
          @endif
          <h3 class="text-2xl text-white uppercase">Envíanos un <span class="font-bold">mensaje</span></h3>
          <form action="{{ route('home.submit') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
              <label for="name" class="block text-white">Nombre<span class="text-red-500">*</span></label>
              <input type="text" value="{{ old('name') }}" id="name" name="name" placeholder="Nombre" class="w-full p-2 rounded-lg border-2 border-gray-200">
              @error('name')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <label for="email" class="block text-white">Correo Electrónico<span class="text-red-500">*</span></label>
              <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="Correo Electrónico" class="w-full p-2 rounded-lg border-2 border-gray-200">
              @error('email')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <label for="phone" class="block text-white">Teléfono</label>
              <input type="phone" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Teléfono" class="w-full p-2 rounded-lg border-2 border-gray-200">
              @error('phone')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <label for="message" class="block text-white">Mensaje<span class="text-red-500">*</span></label>
              <textarea id="message" value="{{ old('message') }}" name="message" placeholder="Describe en qué podemos ayudarte" class="w-full p-2 rounded-lg border-2 border-gray-200"></textarea>
              @error('message')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="bg-white text-primary py-2 px-4 rounded-lg hover:bg-gray-300">Enviar</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    <div class="max-w-80%">
      
      </div>
    </div>
  </div>
@endsection
