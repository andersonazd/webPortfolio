<template>
  <app-layout>
    <div>
      <div class="ml-12 flex items-center">
        <inertia-link
          class="btn mt-5 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
          :href="route('createcategory')"
        >
          <span>Create Category</span>
        </inertia-link>
      </div>

      <!-- component -->
      <div >{{ message}}</div>
      <body class="flex">
        <div class="container text-center">
          <table
            class="w-11/12 flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5 mx-5"
          >
            <thead class="text-white">
              <tr
                class="bg-blue-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0"
              >
                <th class="p-3 text-left">Id</th>
                <th class="p-3 text-left">Nombre</th>
                <th class="p-3 text-left">Editar</th>
                <th class="p-3 text-left">Eliminar</th>
              </tr>
            </thead>
            <tbody
              v-for="category in categories"
              :key="category.id"
              class="flex-1 sm:flex-none text-left"
            >
              <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                <td class="w-4 border-grey-light border hover:bg-gray-100 p-3">
                  {{ category.id }}
                </td>
                <td
                  class="border-grey-light border hover:bg-gray-100 p-3 truncate"
                >
                  {{ category.name }}
                </td>
                <td 
                  class="w-28 font-bold border-grey-light border hover:bg-gray-100 p-3 text-blue-900 hover:text-blue-600 hover:font-bold cursor-pointer"
                >
                  <inertia-link :href="route('editcategory', category.id)">
                    <span>Editar</span>
                  </inertia-link>
                </td>
                <td 
                  class="w-28 font-bold border-grey-light border hover:bg-gray-100 p-3 text-red-900 hover:text-red-600 hover:font-bold cursor-pointer"
                >
                  <inertia-link @click="eliminando" :href="route('deletecategory', category.id)">
                    <span>Eliminar</span>
                  </inertia-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </body>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";

export default {
  components: { AppLayout },

  props: {
    categories: Array,
    message: Array
  },
  component: {
    AppLayout,
  },
  methods: {
 eliminando() {
      this.eliminado = 'Procesando...'
    }
  }
};
</script>


<style>
html,
body {
  height: 100%;
}

@media (min-width: 640px) {
  table {
    display: inline-table !important;
  }

  thead tr:not(:first-child) {
    display: none;
  }
}

td:not(:last-child) {
  border-bottom: 0;
}

th:not(:last-child) {
  border-bottom: 2px solid rgba(0, 0, 0, 0.1);
}
</style>