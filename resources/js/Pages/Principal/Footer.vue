<template>
  <div
    class="shadow p-6 bg-white lg:flex lg:mt-28 sm:justify-evenly text-center items-center"
  >
    <div>
      <img
        class="lg:h-32 mx-auto sm:ml-auto"
        :src="require('../../../../storage/app/public/logo.png')"
      />
    </div>

    <div>
      <h3 class="font-bold">Horarios</h3>
      <p>
        Lun - Vier: 07:00 AM - 06:30 PM <br />

        Sab: 8:00 AM - 3:00 PM
      </p>
    </div>

    <div>
      <h3 class="font-bold">Contacto</h3>
      <p>+57 317 363 7315</p>
      <p>andersonam1@hotmail.com</p>
    </div>
    <div>
      <h3 class="font-bold">Redes</h3>
      <a
                        class="block hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300"
                        target="_blank"
                        href="https://www.facebook.com/Andersonatehortuam/"
                        >Facebook</a
                      >
       <a
                        class="block hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300"
                        target="_blank"
                        href="https://www.linkedin.com/in/anderson-atehortua-montoya-9485b0170/"
                        >linkedin</a
                      >
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style>
</style>