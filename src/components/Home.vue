<template>
  <div>
    <carousel>
      <carousel-slide>
        IMG1
      </carousel-slide>
      <carousel-slide>
        IMG2
      </carousel-slide>
      <carousel-slide>
        IMG3
      </carousel-slide>
    </carousel>
    <div class="container mx-auto">
      <div class="container mx-auto my-12">
        <div class="text-4xl font-bold">
          <h1>{{ titre1 }}</h1>
          <div class="grid grid-cols-3 gap-4">
              <div>Paroi de douche</div>
              <div>Cloison</div>
              <div>Insert Cheminée</div>
              <div>Miroirs</div>
              <div>Crédence de cuisine</div>
              <div>Verre décoratif</div>
          </div>
        </div>
      </div>
      <hr style="height: 2px; width: 50%;" class="mx-auto">
      <div class="container mx-auto my-12">
        <div class="text-4xl font-bold">
          <h1>{{ titre2 }}</h1>
          <div class="grid grid-cols-3 gap-4">
            <div>Arbor </div>
            <div>Echo</div>
            <div>Filae</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Carousel from './carousel/Carousel.vue'
import CarouselSlide from './carousel/CarouselSlide.vue'

export default {
  components: { 
    Carousel, 
    CarouselSlide 
  },
  name: 'Home',
  props: {
    titre1: String,
    titre2: String
  }
}
</script>

<style scoped>

</style>