<template>
  <div class="who-am-i">
    <img :src="whoAmIImage" class="who-am-i__image">
    <p class="who-am-i__description">A hardworking 29-year-old Senior Software Developer, based in Whiteley, Hampshire, UK, who enjoys learning new skills and experiences. I have created websites using HTML, CSS, JavaScript (Vanilla & jQuery), PHP (Laravel), Ruby (Ruby on Rails), SQL, Git Version Control and NET. I also have experience in creating software packages with C#. I'm consistently looking for new projects and challenges to tackle, whether big or small.</p>
  </div>
</template>

<style scoped lang="scss">
@import '@/assets/styles/app.scss';

.who-am-i {
  @extend .py-5;
  @extend .text-center;

  .who-am-i__image {
    width: 200px;
    @extend .mb-4;
  }

  .who-am-i__description {
    max-width: 60%;
    @extend .mx-auto;
    font-weight: 200;
  }
}
</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {mapState} from "vuex";

export default defineComponent({
  name: "WhoAmIComponent",
  computed: {
    ...mapState(['darkMode']),
    whoAmIImage() {
      if(!this.darkMode) {
        return '/img/who-am-i.svg';
      }

      return '/img/who-am-i-dark.svg';
    }
  },
})
</script>