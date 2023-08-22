<template>
  <BContainer class="qualifications">
    <img :src="qualificationsImage" class="qualifications__image">
    <BRow class="qualifications-list" align-v="stretch">
      <BCol cols="12" md="6" lg="3" :key="qualification.title" v-for="qualification in qualifications" class="qualifications-list-column">
        <div class="qualifications-list__item" :class="{ 'qualifications-list__item--dark': darkMode }">
          <h1>{{ qualification.title }}</h1>
          <h2>{{ qualification.time }}</h2>
          <p>{{ qualification.description }}</p>
          <div class="qualification-grade">
            <span>{{ qualification.grade }}</span>
            <FontAwesomeIcon icon="fa-duotone fa-check"></FontAwesomeIcon>
          </div>
        </div>
      </BCol>
    </BRow>
  </BContainer>
</template>

<style scoped lang="scss">
@import '@/assets/styles/app.scss';

.qualifications {
  @extend .py-5;
  @extend .text-center;

  .qualifications__image {
    width: 200px;
    @extend .mb-5;
  }

  //.who-am-i__description {
  //  max-width: 60%;
  //  @extend .mx-auto;
  //}
}

.qualifications-list {

  .qualifications-list-column {
    @extend .flex-grow-1;
    @extend .mb-2;
    @extend .mb-lg-0;
  }

  .qualifications-list__item {
    @extend .d-flex;
    @extend .flex-column;
    @extend .text-start;
    @extend .mx-2;
    @extend .p-2;
    @extend .h-100;
    color: #000;
    background-color: #FFF;
    border-radius: 10px;
    border-style: solid;
    border-width: 1px;
    border-color: transparent;

    &.qualifications-list__item--dark {
      color: #FFF;
      background-color: #000;
    }

    h1 {
      font-size: 16px;
      font-weight: 400;
    }

    h2 {
      font-size: 14px;
      font-weight: 400;
    }

    p {
      font-size: 12px;
      font-weight: 200;
    }
  }
}

.qualification-grade {
  @extend .py-1;
  @extend .px-2;
  @extend .d-flex;
  @extend .mt-auto;
  justify-content: space-between;
  align-items: center;
  font-weight: 200;
  background: #D9F7B1;
  border-color: #7EB96C;
  border-radius: 10px;
  border-style: solid;
  border-width: 1px;
  font-size: 12px;
  color: #7EB96C;
}
</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {mapState} from "vuex";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

export default defineComponent({
  name: "QualificationsComponent",
  components: {FontAwesomeIcon},
  computed: {
    ...mapState(['darkMode', 'qualifications']),
    qualificationsImage() {
      if(!this.darkMode) {
        return '/img/qualifications.png';
      }

      return '/img/qualifications-dark.png';
    }
  },
})
</script>