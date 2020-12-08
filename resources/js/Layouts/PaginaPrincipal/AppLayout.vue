<template>
  <div class="fixed-top min-h-screen bg-gray-100">
    <nav
      :class="{ scrolled: !view.atTopOfPage }"
      class="fixed w-full bg-white border-b border-gray-100"
    >
      <!-- Primary Navigation Menu -->
      <div class="max-w-5xl ml-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <!-- Links Principales -->
          <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
              <inertia-link :href="route('landingPage')">
                <jet-application-mark class="block h-15 w-auto" />
              </inertia-link>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-9 sm:-my-px sm:ml-10 sm:flex">
              <jet-nav-link
                class="text-blue-900 hover:text-red-500"
                :href="route('principal')"
                :active="route().current('principal')"
              >
                Inicio
              </jet-nav-link>
              <jet-nav-link
                class="text-blue-900"
                :href="route('pproyectos')"
                :active="route().current('pproyectos')"
              >
                Proyectos
              </jet-nav-link>
              <jet-nav-link
                class="text-blue-900"
                :href="route('contacto')"
                :active="route().current('contacto')"
              >
                Contacto
              </jet-nav-link>
              <!-- Settings Dropdown -->
              <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="ml-3 relative">
                  <jet-dropdown align="right" width="48">
                    <template #trigger>
                      <button
                        class="flex items-center text-sm font-medium text-blue-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
                      >
                        <div>Enlaces</div>

                        <div class="ml-1">
                          <svg
                            class="fill-current h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </div>
                      </button>
                    </template>

                    <template #content>
                      <a
                        class="link hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 transition duration-150 ease-in-out"
                        target="_blank"
                        href="https://github.com/andersonazd"
                        >Git</a
                      >
                      <jet-nav-link
                        class="link hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 transition duration-150 ease-in-out"
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                      >
                        Zona Admin
                      </jet-nav-link>
                      <div class="border-t border-gray-100"></div>
                    </template>
                  </jet-dropdown>
                </div>
              </div>
              <!-- end dropdown -->
            </div>
          </div>

          <!-- End Links Principales -->

          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
            <button
              @click="showingNavigationDropdown = !showingNavigationDropdown"
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            >
              <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  :class="{
                    hidden: showingNavigationDropdown,
                    'inline-flex': !showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                  :class="{
                    hidden: !showingNavigationDropdown,
                    'inline-flex': showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Inicio Responsive Navbar -->
      <!-- Responsive Navigation Menu -->
      <div
        :class="{
          block: showingNavigationDropdown,
          hidden: !showingNavigationDropdown,
        }"
        class="sm:hidden"
      >
        <div class="pt-2 pb-3 space-y-1 text-center">
          <jet-responsive-nav-link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
          >
            Dashboard
          </jet-responsive-nav-link>
          <jet-nav-link
            class="text-blue-900 hover:text-red-500"
            :href="route('principal')"
            :active="route().current('principal')"
          >
            Inicio
          </jet-nav-link>

          <jet-nav-link
            class="text-blue-900"
            :href="route('pproyectos')"
            :active="route().current('pproyectos')"
          >
            Proyectos
          </jet-nav-link>
          <jet-nav-link
            class="text-blue-900"
            :href="route('contacto')"
            :active="route().current('contacto')"
          >
            Contacto
          </jet-nav-link>
        </div>
      </div>

      <!-- End Responsive Navbar -->
    </nav>
    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <slot name="header"></slot>
      </div>
    </header>

    <!-- Page Content -->
    <main>
      <div class="py-6">
        <div class="">
          <div class="">
            <slot></slot>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="w-full">
        <div class="">
          <slot name="footer"></slot>
          <Footer />
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink";
import Footer from "../../Pages/Principal/Footer";

export default {
  components: {
    JetApplicationMark,
    JetDropdown,
    JetNavLink,
    JetDropdownLink,
    JetResponsiveNavLink,
    Footer,
  },

  data() {
    return {
      showingNavigationDropdown: false,
      view: {
        atTopOfPage: true,
      },
    };
  },

  beforeMount() {
    window.addEventListener("scroll", this.handleScroll);
  },

  methods: {
    logout() {
      axios.post(route("logout").url()).then((response) => {
        window.location = "/";
      });
    },

    handleScroll() {
      // when the user scrolls, check the pageYOffset
      if (window.pageYOffset > 0) {
        // user is scrolled
        if (this.view.atTopOfPage) this.view.atTopOfPage = false;
      } else {
        // user is at top of page
        if (!this.view.atTopOfPage) this.view.atTopOfPage = true;
      }
    },
  },
};
</script>

<style>
nav {
  z-index: 10;
}

nav.scrolled {
  @apply shadow-xs;
  border-bottom: 0px;
}
</style>