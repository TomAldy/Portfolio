<template>
  <div class="copyright">
    <BContainer fluid>
      <BCol class="d-flex justify-content-between align-items-center p-3 flex-column flex-lg-row">
        <img :src="logo" alt="TomAldy Logo">
        <span class="mt-2 mt-lg-0">Developed by Tom Alderson</span>
      </BCol>
    </BContainer>
  </div>
</template>

<style scoped lang="scss">

</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {mapState} from "vuex";

export default defineComponent({
  name: "CopyrightComponent",
  computed: {
    ...mapState(['darkMode']),
    logo() {
      if(!this.darkMode) {
        return '/img/logo.png';
      }

      return '/img/logo-dark.png';
    },
  }
})
</script>