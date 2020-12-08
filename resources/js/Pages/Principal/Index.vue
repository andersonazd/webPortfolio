<template>
 
    <div
      class="p-6 bg-white lg:px-8 text-center lg:flex items-center lg:mt-28 justify-center"
    >
      <div class="textBox">
        <h2 class="mt-8 text-3xl">
          Anderson Atehortua Montoya <br />
          Desarrollador <span class="text-red-600">FullStack</span>
        </h2>
        <p class="max-w-3xl mt-6">
         El mundo requiere de profesionales íntegros con gran capacidad de adaptación, que no teman darlo todo por
         lograr los objetivos. Quiero ser ese profesional que tanto necesitas. Ingresa y te darás cuenta de mi capacidad.

        </p>
        <jet-nav-link class="btn mt-5 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150" :href="route('principal')" :active="route().current('principal')">
              Ingresar
          </jet-nav-link>
      </div>
      <div>
        <img class="mx-auto h-96"
          :src="require('../../../../storage/app/public/desarrolladoraam.png')"
        />
      </div>
    </div>

</template>

<script>

    import JetNavLink from '@/Jetstream/NavLink'

export default {
  components:{
    JetNavLink,
  },
  name: "landingPage",
};
</script>

<style>

</style>