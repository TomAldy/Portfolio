<template>
  <main class="template" :class="{ 'template--dark': darkMode }">
    <NavigationComponent></NavigationComponent>
    <BannerComponent></BannerComponent>
    <WhoAmIComponent></WhoAmIComponent>
    <PortfolioComponent></PortfolioComponent>
    <QualificationsComponent></QualificationsComponent>
    <MessageMeComponent></MessageMeComponent>
    <CopyrightComponent></CopyrightComponent>
  </main>
</template>

<script lang="ts">
import {defineComponent} from "vue";
import {mapState} from "vuex";
import NavigationComponent from "@/components/NavigationComponent.vue";
import BannerComponent from "@/components/BannerComponent.vue";
import WhoAmIComponent from "@/components/WhoAmIComponent.vue";
import PortfolioComponent from "@/components/PortfolioComponent.vue";
import QualificationsComponent from "@/components/QualificationsComponent.vue";
import MessageMeComponent from "@/components/MessageMeComponent.vue";
import CopyrightComponent from "@/components/CopyrightComponent.vue";

export default defineComponent({
  name: 'App',
  components: {
    CopyrightComponent,
    MessageMeComponent,
    QualificationsComponent, PortfolioComponent, WhoAmIComponent, BannerComponent, NavigationComponent},
  computed: {
    ...mapState(['darkMode'])
  },
  beforeMount() {
    const darkMode = localStorage.getItem('darkMode');

    if(darkMode != null) {
      this.$store.dispatch('setDarkMode', darkMode === "true");
    }else{
      const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");
      this.$store.dispatch('setDarkMode', systemSettingDark.matches);
    }
  },
  watch: {
    darkMode(value) {
      if(value) {
        document.body.classList.add("template--dark");
      }else{
        document.body.classList.remove("template--dark");
      }
    }
  }
})
</script>

<style lang="scss">
@import '@/assets/styles/app.scss';

html, body {
  font-family: 'Ubuntu', sans-serif;
  padding: 0;
  margin: 0;
}

html, body, #app, .template {
  width: 100%;
  height: 100%;
}

.template, body {
  background: #F5F5F5;

  &.template--dark {
    background: #4B4B4B;
    color: #F0F0F0;

    .nav-link {
      color: #F0F0F0;
    }
  }
}
</style>
