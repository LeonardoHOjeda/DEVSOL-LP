@extends('layouts.layout')

@section('title', 'DevSolutions MX')

@section('content')
  <div class="min-h-screen">
    <div class="relative h-96 bg-fixed bg-cover bg-center" style="background-image: url('images/home.jpg');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center text-center">
        <h1 class="text-6xl text-white">Creamos tu pagina web</h1>
      </div>
    </div>
    <div class="mt-10 md:w-[80%] mx-auto">
      <h2 class="text-4xl text-center">Quienes somos?</h2>
      <div class="flex flex-col md:flex-row justify-between items-center w-full mx-auto">
        <img src="images/team-work.png" alt="Trabajo en equipo" class="h-80">
        <p class="text-lg w-[60%]">Somos una empresa de desarrollo web que se especializa en la creación de sitios web para pequeñas y medianas empresas.</p>
      </div>
    </div>

    <div class="relative h-96 bg-fixed bg-cover bg-center" style="background-image: url('images/computers.jpg');">
      <div class="absolute inset-0 bg-black bg-opacity-50">
        <h2 class="text-white text-4xl text-center mt-10">Nuestros Servicios</h2>
          <div class="flex flex-col gap-3 mt-10 md:mx-10 md:flex-row md:justify-evenly">
            <div class="bg-gray-200 p-4 rounded-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 w-1/2 mx-auto">
              <img src="images/web-design.png" alt="Diseño web" class="h-16 mx-auto">
              <p class="text-lg text-center">Diseño web</p>
            </div>
  
            <div class="bg-gray-200 p-4 rounded-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 w-1/2 mx-auto">
              <img src="images/web-development.png" alt="Desarrollo Web" class="h-16 mx-auto">
              <p class="text-lg text-center">Desarrollo web</p>
            </div>
  
            <div class="bg-gray-200 p-4 rounded-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 w-1/2 mx-auto">
              <img src="images/web-maintenance.png" alt="Desarrollo Web" class="h-16 mx-auto">
              <p class="text-lg text-center">Mantenimiento Web</p>
            </div>
  
            <div class="bg-gray-200 p-4 rounded-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 w-1/2 mx-auto">
              <img src="images/marketing.png" alt="Desarrollo Web" class="h-16 mx-auto">
              <p class="text-lg text-center">Marketing Digital</p>
            </div>
  
            <div class="bg-gray-200 p-4 rounded-lg transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 w-1/2 mx-auto">
              <img src="images/seo.png" alt="Desarrollo Web" class="h-16 mx-auto">
              <p class="text-lg text-center">SEO</p>
            </div>
          </div>

      </div>
    </div>

    <div class="my-10 w-[80%] mx-auto">
      <h2 class="text-4xl text-center">Por que elegirnos?</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10">
        <div class="p-4 rounded-3xl mx-auto mt-10 border-2 border-primary">
          <img src="images/profesional.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Experiencia y Profesionalismo</h3>
          <hr class="border-4 rounded-lg border-primary w-10 mx-auto my-3">
          <p class="text-lg text-center">Contamos con un equipo de profesionales con años de experiencia en el diseño y desarrollo web.</p>
          <p class="text-lg text-center">Hemos trabajado con una amplia variedad de negocios, desde pequeñas startups hasta empresas establecidas, ayudándolas a alcanzar sus objetivos digitales.
          </p>
        </div>
        
        <div class="bg-gray-200 p-4 rounded-lg mx-auto mt-10">
          <img src="images/custom.png" alt="Desarrollo Web" class="h-16 mx-auto">
          <h3 class="text-center text-2xl font-bold uppercase">Soluciones Personalizadas</h3>
          <hr class="border-4 rounded-lg border-black w-10 mx-auto my-3">
          <p class="text-lg text-center">Cada negocio es único, por eso ofrecemos soluciones a medida que se ajustan a tus necesidades específicas.</p>
          <p class="text-lg text-center">Nos aseguramos de que cada aspecto de tu proyecto esté perfectamente alineado con tu visión y metas.
          </p>
        </div>
  
        <div class="bg-gray-200 p-4 rounded-lg mx-auto mt-10">
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
  
        <div class="bg-gray-200 p-4 rounded-lg mx-auto mt-10">
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
      <h2 class="text-4xl text-center text-white">Contáctanos</h2>
      <hr class="border-2 border-white w-[40%] mx-auto my-5">
      <div class="flex  flex-col md:flex-row">
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
        <div class="w-full md:w-1/2 p-4">
          <h3 class="text-2xl text-white">Envíanos un mensaje</h3>
          <form action="#" method="POST" class="mt-4">
            <div class="mb-4">
              <label for="name" class="block text-white">Nombre</label>
              <input type="text" id="name" name="name" class="w-full p-2 rounded-lg border-2 border-gray-200" required>
            </div>
            <div class="mb-4">
              <label for="email" class="block text-white">Correo Electrónico</label>
              <input type="email" id="email" name="email" class="w-full p-2 rounded-lg border-2 border-gray-200" required>
            </div>
            <div class="mb-4">
              <label for="phone" class="block text-white">Teléfono</label>
              <input type="phone" id="phone" name="phone" class="w-full p-2 rounded-lg border-2 border-gray-200" required>
            </div>
            <div class="mb-4">
              <label for="message" class="block text-white">Mensaje</label>
              <textarea id="message" name="message" class="w-full p-2 rounded-lg border-2 border-gray-200" required></textarea>
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
