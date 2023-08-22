<template>
  <BNavbar toggleable="lg" type="light">
    <BContainer fluid>
        <BNavbarBrand to="/">
          <img :src="logo" alt="TomAldy Logo" class="mt-0 mt-lg-2 mb-2">
        </BNavbarBrand>

       <BNavbarToggle target="nav-collapse" class="navigation-button"></BNavbarToggle>

        <BCollapse id="nav-collapse" is-nav class="navigation">
          <BNavbarNav>
            <BNavItem @click="navigateTo('home')">
              <div class="nav-item__icon">
                <FontAwesomeIcon icon="fa-duotone fa-house" />
              </div>
              <label class="nav-item__label">Home</label>
            </BNavItem>
            <BNavItem @click="navigateTo('about-me')">
              <div class="nav-item__icon">
                <FontAwesomeIcon icon="fa-duotone fa-user" />
              </div>
              <span>About Me</span>
            </BNavItem>
            <BNavItem @click="navigateTo('portfolio')">
              <div class="nav-item__icon">
                <FontAwesomeIcon icon="fa-duotone fa-folder" />
              </div>
              <label class="nav-item__label">Portfolio</label>
            </BNavItem>
            <BNavItem @click="navigateTo('qualifications')">
              <div class="nav-item__icon">
                <FontAwesomeIcon icon="fa-duotone fa-graduation-cap" />
              </div>
              <label class="nav-item__label">Qualifications</label>
            </BNavItem>
            <BNavItem @click="navigateTo('message-me')">
              <div class="nav-item__icon">
                <FontAwesomeIcon icon="fa-duotone fa-paper-plane" />
              </div>
              <label class="nav-item__label">Message Me</label>
            </BNavItem>
            <BNavItem @click="switchDarkMode">
              <div class="nav-item__icon">
                <FontAwesomeIcon :icon="navigationIcon" />
              </div>
              <label class="nav-item__label">{{ navigationLabel }}</label>
            </BNavItem>
          </BNavbarNav>
        </BCollapse>
    </BContainer>
  </BNavbar>
</template>

<style lang="scss">
@import '@/assets/styles/app.scss';

.navigation, .navigation-button {
  @extend .float-end;
  @extend .mt-2;
}

.navbar-collapse {
  @extend .w-100;

  @include media-breakpoint-up(lg) {
    width: auto !important;
  }
}

.nav-link {
  @extend .d-flex;
  @extend .flex-lg-column;
  @extend .ms-lg-4;

  .nav-item__icon, .nav-item__label {
    @extend .justify-content-center;
    @extend .align-items-center;
    @extend .text-center;
    @extend .me-2;
    @extend .me-lg-0;
    cursor: pointer;
  }
}
</style>

<script lang="ts">
import {BCollapse, BContainer, BNavbar, BNavbarBrand, BNavbarToggle, BRow} from 'bootstrap-vue-next';
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {defineComponent} from 'vue'
import {mapState} from "vuex";

export default defineComponent({
  name: "NavigationComponent",
  components: {
    BNavbar,
    BContainer,
    BNavbarBrand,
    BNavbarToggle,
    BCollapse,
    // BRow,
    FontAwesomeIcon
  },
  computed: {
    ...mapState(['darkMode']),
    logo() {
      if(!this.darkMode) {
        return '/img/logo.png';
      }

      return '/img/logo-dark.png';
    },
    navigationIcon() {
      if(!this.darkMode) {
        return 'fa-duotone fa-moon';
      }

      return 'fa-duotone fa-sun';
    },
    navigationLabel() {
      if(!this.darkMode) {
        return 'Dark Mode';
      }

      return 'Light Mode';
    }
  },
  methods: {
    switchDarkMode() {
      this.$store.dispatch('setDarkMode', !this.darkMode);
    },
    navigateTo(location: string) {
      const element = document.getElementById(location);
      if(element) {
        setTimeout(() => {
          element.scrollIntoView({behavior: 'smooth', block: 'end' });
        }, 200);
      }
    }
  }
})
</script>