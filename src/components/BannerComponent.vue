<template>
  <div class="banner">
    <div class="banner__avatar">
      <img src="/img/avatar.png" class="img-fluid">
    </div>
    <div class="banner__logo">
      <img src="/img/banner-logo.png" class="img-fluid">
    </div>
  </div>
</template>

<style scoped lang="scss">
@import '@/assets/styles/app.scss';

.banner {
  background-image: url('@/assets/img/banner.png');
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;

  @extend .text-center;
  @extend .py-4;
  @extend .py-lg-5;
  @extend .px-3;
  @extend .px-lg-0;

  .banner__avatar {
    @extend .mb-3;
  }
}

</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {mapState} from "vuex";

export default defineComponent({
  name: "BannerComponent",
  computed: {
    ...mapState(['darkMode'])
  },
})
</script>