<template>
  <agile
    autoplay
    :slidesToShow="this.itemsCount"
    :speed="800"
    :throttleDelay="50"
    :navButtons="false"
  >
      <div v-for="p in projects">
            <div class="py-6 px-3">
                <div class="bg-white shadow-xl overflow-hidden">
                  <img :src="'/storage/' + getCrop(p.image)" :alt="p.heading">
                    <div class="p-4">
                        <p class="text-regular text-gray-700">{{p.heading}}</p>
                    </div>

                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">{{p.year}}</span></p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                          <a :href="getUrl(p.slug)">
                            <button class="hover:underline gradient text-white font-bold my-1 py-3 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                              {{$ml.get('readmore')}}
                            </button>
                          </a>
                        </div>
                    </div>

                </div>
            </div>
          </slide>
        </div>

      </agile>
  </template>

<script>
import { VueAgile } from 'vue-agile'
export default {
  props: ['lang', 'projects'],
  components: {
        agile: VueAgile
  },
  data(){
    return{
      width: 0,
    }
  },
  methods: {
    getUrl (url) {
      let link = null;
        if (url) {
          if (this.lang == 'ru') {
             link = '/portfolio/' + url;
          }
          else {
             link = '/' + this.lang + '/portfolio/' + url;
          }
        }
       return link;
     },
     getCrop (img) {
       return img.replace(/\./g, '-cropped.');
     },
     updateWidth() {
       this.width = window.innerWidth;
     },
  },
  computed: {
    itemsCount() {
      if (this.width > 900) {
        return 3;
      } else if (this.width > 550) {
        return 2;
      } else {
        return 1;
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
