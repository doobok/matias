<template>
  <agile
    autoplay
    :autoplaySpeed="2000"
    :slidesToShow="this.itemsCount"
    :speed="500"
    :throttleDelay="50"
    :navButtons="false"
    :dots="false"
  >
      <div v-for="item in items" class="flex items-center justify-center">
        <div class="icon--slider mx-4 flex justify-center">
          <div class="">
            <img :alt="item.name"
                :title="item.name"
                :src="'/storage/' + item.image">
          </div>
        </div>
      </div>

    </agile>

</template>

<script>
import { VueAgile } from 'vue-agile'
export default {
  props: ['items'],
  components: {
        agile: VueAgile
  },
  data(){
    return{
      width: 0,
    }
  },
  methods: {
     updateWidth() {
       this.width = window.innerWidth;
     },
  },
  computed: {
    itemsCount() {
      if (this.width > 900) {
        return 7;
      } else if (this.width > 550) {
        return 5;
      } else {
        return 3;
      }
    }
  },
  created() {
    window.addEventListener('resize', this.updateWidth);
  },
  mounted() {
    this.width = window.innerWidth;
  }
}

</script>

<style>
.icon--slider {
  opacity: 0.75;
}
.icon--slider:hover {
  opacity: 1;
}
</style>
