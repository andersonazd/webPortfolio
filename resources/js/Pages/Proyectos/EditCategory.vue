<template>
<app-layout>
    <div>
      <jet-nav-link
        class="btn mt-5 ml-5 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
        :href="route('addcategory')"
        :active="route().current('addcategory')"
      >
        Regresar
      </jet-nav-link>
      <transition name="fade">
        <div
          v-if="mensaje"
          class="mensaje bg-green-600 mx-5 mt-5 w-7/12 text-center"
        >
          Categoría Actualizada Correctamente, puedes seguir editando o regresar.
        </div>
      </transition>
      <transition name="fade">
        <div
          v-if="errors"
          class="mensaje bg-red-600 mx-5 mt-5 w-7/12 text-center"
        >
          Ha ocurrido un error, por favor intentelo de nuevo.
        </div>
      </transition>
    </div>
    <div class="">
      <form @submit.prevent="submit">
        <div>
          <div class="mx-6 my-5">
            <label for="name">Categoría</label>
            <input
              v-model="form.name"
              class="bg-white border border-gray-500"
              id="Name"
              required
            />
            <div
              class="btn hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
            >
              <button class="btn-indigo" type="submit">Crear</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </app-layout>
</template>

<script>

import AppLayout from '../../Layouts/AppLayout';
import JetNavLink from "@/Jetstream/NavLink";



export default {
  components: { AppLayout, JetNavLink },

props: {
    categories: Object,
  },
  remember: 'form',
  data() {
    return {
      form: {
        id: this.categories.id,
        name: this.categories.name,
      },
      mensaje: false,
      errors: false,
    }
  },
  methods: {
    quitarMensaje() {
      setTimeout(() => ((this.mensaje = false), (this.errors = false)), 7000);
    },

    submit() {
      // this.$inertia.post(this.route('category'), this.form)
      axios
        .post(`/category/${this.form.id}`, this.form)
        
        .then((Response) => {
          this.mensaje = true;
          this.quitarMensaje();
        })
        .catch((Response) => {
          this.errors = true;
          this.quitarMensaje();
        });
    },
  },
}
</script>
