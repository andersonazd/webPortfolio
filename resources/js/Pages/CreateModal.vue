<template>
  <div>
    <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" v-on:click="toggleModal()">
      Agregar
    </button>
    <div id="addStudent" v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
      <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            <h3 class="text-3xl font-semibold">
              Titulo
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click="toggleModal()">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          <!--body-->
          <div class="relative p-6 flex-auto">
           <form @submit.prevent="addStudent">
               <div>
                   <label for="full_name" class="form-label mb-2">Nombre</label>
                   <input type="text" v-model="student.full_name" name="full_name" id="full_name" class="bg-white block mt-1 w-full" placeholder="Ingrese Su Nombre">
               </div>
               <div>
                   <label for="course" class="form-label mb-2">Course</label>
                   <input type="text" v-model="student.course" name="course" class="bg-white block mt-1 w-full" placeholder="Ingrese Su Contraseña">
               </div>
               <div>
                   <label for="date_of_enrollment" class="form-label mb-2">date_of_enrollment</label>
                   <input type="date" v-model="student.date_of_enrollment" name="date_of_enrollment" class="bg-white block mt-1 w-full" placeholder="Ingrese Su Contraseña">
               </div>
           </form>
          </div>
          <!--footer-->
          <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" v-on:click="toggleModal()">
              Cerrar
            </button>
            <button class="text-green-500 bg-transparent border border-solid border-green-500 hover:bg-green-500 hover:text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" v-on:click="toggleModal()">
              Guardar Cambios
            </button>
          </div>
        </div>
      </div>
    </div>
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>

</template>

<script>
export default {
  name: "regular-modal",
  data() {
    return {
      showModal: false,
      students: [],
      students:{
          full_name: '',
          date_of_enrollment: '',
          course: '',

      }
    }
  },
  methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    }
  }
}
</script>