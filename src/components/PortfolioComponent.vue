<template>
  <div class="portfolio">
    <Swiper :slides-per-view="1" navigation :modules="modules" :space-between="0" :breakpoints="{
            760: {
              slidesPerView: 3
            },
            1200: {
              slidesPerView: 4
            },
            1400: {
              slidesPerView: 5
            }
           }">
      <SwiperSlide v-for="item in portfolio" :key="item.image">
        <div class="portfolio-item" :style="`background: url('${item.image}'); background-size: cover; background-position: center center; background-repeat: no-repeat;`" @click="openLink(item.link)"></div>
      </SwiperSlide>
    </Swiper>
  </div>
</template>

<style lang="scss">
@import '@/assets/styles/app';
@import '~swiper/swiper-bundle.css';

  .portfolio {
    overflow: hidden;
    height: 300px;

    @include media-breakpoint-up(lg) {
      height: 600px;
    }

    .swiper {
      @extend .h-100;

      .swiper-button-prev, .swiper-button-next {
        color: black !important;
        z-index: 1000;
        position: absolute;

        &::after {
          background: rgba(255, 255, 255, 0.6);
          padding: 10px;
        }
      }
    }

    .portfolio-item {
      @extend .h-100;
      position: relative;
      cursor: pointer;

      &:hover {
        &::before {
          content: '';
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          z-index: 1;
          background: rgba(0, 0, 0, 0.5);
        }
      }
    }
  }
</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {mapState} from "vuex";
import { Swiper, SwiperSlide } from 'swiper/vue';
import {Navigation} from "swiper/modules";


export default defineComponent({
  name: "PortfolioComponent",
  components: {
    Swiper,
    SwiperSlide
  },
  computed: {
    ...mapState(['portfolio'])
  },
  data() {
    return {
      modules: [Navigation]
    }
  },
  methods: {
    openLink(link: string) {
      window.open(link, "_blank");
    }
  }
})
</script>