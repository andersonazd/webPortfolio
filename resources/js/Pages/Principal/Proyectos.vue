<template>
  <app-layout>
    <div
      class="mt-8 shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <h1 class="sm:w-11/12 text-3xl font-bold bg-white mt-8">Proyectos</h1>
    </div>
    <div class="division sm:w-11/12 p-6 lg:flex">
      <h2 class="text-2xl mb-4">
        Durante mi periodo de aprendizaje, he logrado diseñar y crear algunos proyectos que dan valor a las personas
        y sus empresas.
        3 de estos proyectos, fueron desarrollados en Wordpress durante el periodo de practicas en la empresa Aliviate.co,
        el resto fueron creados en los tiempos libres durante este mismo periodo y tenían como objetivo de practicar los 
        conocimientos que iba adquiriendo.
      </h2>
    </div>
    <div
      class="mt-8 shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <h2 class="sm:w-11/12 text-3xl font-bold bg-white sm:my-8">Wordpress</h2>
    </div>
    <div
      class="sm:flex shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <div class="mx-4">

        <img
          class="h-56 sm:max-w-sm"
          :src="require('../../../../storage/app/public/beoorientandolafamilia.png')"
        />
        <h3 class="text-2xl mt-4">
          Pagina web diseñada para mostrar información de relevancia para el cliente y la venta de sus servicios.
           Cuenta con plugins gratis para disminuir el costo de producción. 
        </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://beoorientandolafamilia.com/">Visitar</a>

        </div >
        <div class="mx-4 ">
          <img
            class="h-56 sm:max-w-sm"
            :src="require('../../../../storage/app/public/aliviate.png')"
          />
          <h3 class="text-2xl mt-4">
            Pagina e-commerce. Tiene un landing page llamativo, cada pestaña tiene una categoría diferente de los productos
            ofrecidos por la empresa.
          </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://aliviate.co/">Visitar</a>
        </div>
        <div class="mx-4">
          <img
            class="h-56 sm:max-w-sm"
            :src="require('../../../../storage/app/public/tiendahnd.png')"
          />
          <h3 class="text-2xl mt-4">
            Pagina e-commerce. Cuenta con categorías de productos que se venden mediante payU. Su principal
            caracteristica es conectar cliente-vendedor
          </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://tiendahnd.com.co/">Visitar</a>
        </div>
      </div>

      <div
      class="mt-8 shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <h2 class="sm:w-11/12 text-3xl font-bold bg-white sm:my-8">Php - Javascript</h2>
    </div>
    <div
      class="shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <div class="mx-1 my-1">

        <img
          class="h-56 w-96 mx-auto items-center"
          :src="require('../../../../storage/app/public/todolist.png')"
        />
        <h3 class="text-2xl mt-4">
          Proyecto creado para practicar las nuevas caracteristicas de laravel 8 e inercia. 
        </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://github.com/andersonazd/TodoList">Visitar</a>
        </div >
        <div class="mx-1 my-1">
          <img
            class="h-56 sm:max-w-sm mx-auto"
            :src="require('../../../../storage/app/public/pilgrim.png')"
          />
          <h3 class="text-2xl mt-4">
          Proyecto creado para practicar la integración de plantilla con laravel 8 e inercia. 
          </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://github.com/andersonazd">Visitar</a>         
        </div>
        <div class="mx-1 my-1">
          <img
            class="h-56 sm:max-w-sm mx-auto"
            :src="require('../../../../storage/app/public/cms.png')"
          />
          <h3 class="text-2xl mt-4">
          Proyecto en proceso de creación. Un cms laravel 8 e inercia. Será para uso general. 
          </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://github.com/andersonazd">Visitar</a>
        </div>
      </div>

      <div
      class="shadow sm:w-11/12 bg-white text-center lg:flex items-center mx-auto"
    >
      <div class="mx-1 my-1">

        <img
          class="h-56 w-96 mx-auto items-center"
          :src="require('../../../../storage/app/public/react.png')"
        />
        <h3 class="text-2xl mt-4 w-96 mx-auto items-center">
          Proyecto creado para practicar react js, basado en el curso de udemy. 
        </h3>
        <a target="_blank" class="btn my-8 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="https://github.com/andersonazd/">Visitar</a>
        </div >
      
      </div>

  </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/PaginaPrincipal/AppLayout";

export default {
  components: {
    AppLayout,
  },
  name: "proyectos",
};
</script>

<style>
</style>