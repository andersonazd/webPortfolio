<template>
  <app-layout>
    <div class="">
      <jet-nav-link
        class="btn mt-5 ml-5 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
        :href="route('proyectos')"
        :active="route().current('proyectos')"
      >
        Regresar
      </jet-nav-link>
      <transition name="fade">
        <div
          v-if="mensaje"
          class="mensaje bg-green-600 mx-5 mt-5 w-7/12 text-center"
        >
          Proyecto Creado Correctamente, puedes agregar uno nuevo o regresar.
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

      <div class="mx-6 mb-5 p-4">
        <form @submit.prevent="addProyect" enctype="multipart/form-data">
          <div>
            <div class="mt-5 inline-block mr-5">
              <label for="name">Nombre Proyecto</label>
              <input
                v-model="form.name"
                class="bg-white border border-gray-500"
                id="Name"
                required
              />
            </div>
            <div class="mt-5 inline-block mr-5">
              <label for="description">Descripción</label>
              <input
                v-model="form.description"
                class="bg-white border border-gray-500"
                id="description"
                required
              />
            </div>
            <div class="mt-5 inline-block mr-5">
              <label for="link">Link Proyecto</label>
              <input
                v-model="form.link"
                class="bg-white border border-gray-500"
                id="link"
                required
              />
              <div class="bg-red-400 w-1/3 my-3" v-if="errors.link">
                {{ errors.link }}
              </div>
            </div>

            <div class="mt-5 inline-block mr-5">
              <label for="category_id">Categoría</label>
              <select v-model="form.category_id" id="category_id" required>
                <option
                  v-for="category in categories"
                  :key="category.id"
                  :value="category.id"
                >
                  {{ category.name }}
                </option>
              </select>
            </div>
            <div class="bg-red-400 w-1/3 my-3" v-if="errors.category_id">
              {{ errors.category_id }}
            </div>
            <div class="mt-5 inline-block">
              <div>
                <label for="customfile">Subir Foto</label>
                <input type="file" @change="imageSelected" id="customfile" />
              </div>
            </div>
            <div v-if="imagepreview">
              <img
                :src="imagepreview"
                class="rounded mt-5"
                style="max-height: 200px"
                required
              />
            </div>
          </div>
          <div
            class="mt-5 btn hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
          >
            <button class="btn-indigo" type="submit">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";
import JetNavLink from "@/Jetstream/NavLink";

export default {
  components: { AppLayout, JetNavLink },

  props: {
    categories: Array,
  },
  remember: "form",
  data() {
    return {
      form: {
        name: null,
        category_id: null,
        description: null,
        link: null,
        image: null,
      },
      imagepreview: null,
      mensaje: false,
      errors: false,
    };
  },
  methods: {
    imageSelected(e) {
      let file = e.target.files[0];
      this.form.image = file;
      this.cargarImagen(file);
    },

    cargarImagen(file) {
      let reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = (e) => {
        this.imagepreview = e.target.result;
      };
    },

    quitarMensaje() {
      setTimeout(() => (
      this.mensaje = false,
      this.errors = false
      ), 7000);
    },

    addProyect() {
      let formData = new FormData();
      formData.append("name", this.form.name);
      formData.append("category_id", this.form.category_id);
      formData.append("description", this.form.description);
      formData.append("link", this.form.link);
      formData.append("image", this.form.image);

      axios
        .post("/addproyectos", formData)
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
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>