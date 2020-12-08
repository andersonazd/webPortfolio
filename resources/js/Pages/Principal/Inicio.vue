<template>
  <app-layout>
    <div
      class="text-center text-black lg:text-black bgimage bg-cover bg-center py-24 w-full"
    >
      <div class="md:w-3/4">
        <p class="text-3xl font-bold uppercase">Desarrollador</p>
        <p class="text-2xl font-bold">PHP - JAVASCRIPT</p>
        <p class="text-2xl leading-none mt-2 font-bold">
          Laravel 8 - Vuejs - Inertia - Mysql
        </p>
        <p class="text-2xl leading-none font-bold">Git - Github - Linux</p>
      </div>
    </div>
    <div class="items-center text-center">
      <a
        href="https://drive.google.com/uc?id=1sj6hyeUTHcwtwC8Wv0I9UXExlaFGBjBQ&export=download"
        class="btn mt-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
        >Descargar Hoja de vida</a
      >
      <a
        href="https://drive.google.com/uc?id=1i7G98UFBimT8nML8K5hy6iZXoMAvOaha&export=download"
        class="btn mt-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
        >Recomendación Aliviate.co</a
      >
    </div>
    <div
      class="mt-8 shadow sm:w-11/12 px-6 sm:p-6 bg-white text-center lg:flex sm:items-center sm:mt-8 sm:mx-auto"
    >
      <h2 class="pt-6 sm:w-1/2 text-2xl sm:mx-auto sm:ml-13">
        Tecnólogo en sistemas con conocimiento en el área de la tecnología. 
        <br> Cuento con experiencia desarrollando con php - javascript y creando paginas web en wordpress. 

      </h2>

      <div>
        <img
          class="sm:w-1/2 sm:mx-auto"
          :src="require('../../../../storage/app/public/tecnology.jpg')"
        />
      </div>
    </div>
        <div
      class="mt-8 shadow sm:w-11/12 px-6 sm:p-6 bg-white text-center lg:flex sm:items-center sm:mt-8 sm:mx-auto"
    >

      <div>
        <img
          class="sm:w-1/2 sm:ml-15"
          :src="require('../../../../storage/app/public/logo_laravel.png')"
        />
      </div>
      <h2 class="pt-6 sm:w-1/2 text-2xl sm:mx-auto sm:mr-15">
        Actualmente estoy enfocado en el desarrollo con laravel y vue js con spa y rest api. <br> Soy una persona pro activa, adaptable y con interés en asumir retos.

      </h2>

    </div>

    <div
      class="shadow sm:w-11/12 p-6 bg-white text-center lg:flex items-center lg:mt-16 mx-auto sm:justify-center"
    >
      <div>
        <img
          class="w-1/2 mx-auto"
          :src="require('../../../../storage/app/public/escuela.png')"
        />
      </div>
      <div class="sm:w-1/2 sm:mr-12 text-center">
        <h2 class="text-3xl sm:ml-4 font-bold">Estudios</h2>
        <h3 class="text-2xl sm:ml-12">
          <span class="text-black font-bold">Tecnología:</span> Analisis y
          Desarrollo de sistemas
          <a
            class="text-blue-900"
            href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"
            target="_blank"
            >SENA</a
          >
        </h3>
        <h3 class="text-2xl sm:ml-12">
          <span class="text-black font-bold">Técnico:</span> Reparación y
          mantenimiento de equipos de computo
          <a
            class="text-blue-900"
            href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"
            target="_blank"
            >SENA</a
          >
        </h3>
        <h3 class="text-2xl sm:ml-12">
          <span class="text-black font-bold">Bachillerato:</span> Monseñor
          Francisto Cristobal Toro -
          <a
            class="text-blue-900"
            href="https://www.google.com/maps?q=monse%C3%B1or+francisco+cristobal+toro&um=1&ie=UTF-8&sa=X&ved=2ahUKEwii1IvFnZ3tAhVyuVkKHd73B4IQ_AUoAXoECAQQAw"
            target="_blank"
            >Aranjuez</a
          >
        </h3>
      </div>
    </div>
    <div
      class="shadow sm:w-11/12 p-6 bg-white text-center lg:flex items-center lg:mt-16 mx-auto justify-center"
    >
      <div>
        <h2 class="text-3xl font-bold">Experiencia Laboral</h2>
        <h3 class="text-2xl">
          <span class="text-black font-bold">Desarrollador Paginas Web:</span> 6
          meses durante las practicas profesionales - 2020
          <a class="text-blue-900" href="https://aliviate.co/" target="_blank"
            >Aliviate.co</a
          >
        </h3>
        <h3 class="text-2xl">
          <span class="text-black font-bold">Profesor de tecnología:</span> 2
          años y medio 2016-2019 - Alcaldía de
          <a
            class="text-blue-900"
            href="https://www.medellin.gov.co/"
            target="_blank"
            >Medellín</a
          >
        </h3>
        <h3 class="text-2xl">
          <span class="text-black font-bold">Tecnico de sistemas:</span> 9 años
          como tecnico independiente 2011-actualidad
        </h3>
      </div>
    </div>
    <div
      class="shadow sm:w-11/12 p-6 bg-white text-center lg:flex items-center lg:mt-16 mx-auto justify-center"
    >
      <div>
        <h2 class="text-3xl font-bold">Intereses y Pasatiempos</h2>
        <h3 class="text-xl sm:ml-12">
          <span class="text-black font-bold">Aprender nuevas cosas:</span> constantemente me instruyo en diversos temas, con el fin de mejorar a nivel personal y profesional.
        </h3>
        <h3 class="text-xl sm:ml-12">
          <span class="text-black font-bold">Compartir con mi familia:</span>
          en nuestros tiempos libres, hacemos diversas actividades que permitan fortalecer vínculos y comunicación.
        </h3>
        <h3 class="text-xl sm:ml-12">
          <span class="text-black font-bold">Conocer diferentes lugares:</span> cuando salgo de mi zona de confort, amplio mi espectro, conociendo diversas culturas y ampliando mi circulo social.
        </h3>

        <h3 class="text-xl sm:ml-12">
          <span class="text-black font-bold">Jugar Ajedrez:</span> Este juego aparte de darme diversión, influye positivamente en la lógica, memoria y estrategia.
        </h3>
      </div>
      <div>
        <img
          class="sm:w-3/4 mx-auto"
          :src="require('../../../../storage/app/public/diversion.jpg')"
        />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/PaginaPrincipal/AppLayout";

export default {
  components: { AppLayout },
  name: "principal",
};
</script>

<style>
.bgimage {
  background-image: url(../../../../storage/app/public/bg-desarrollador.png);
  height: 400px;
}
</style>