<template>
    <agile
      autoplay
      :autoplaySpeed="6000"
      :changeDelay="2200"
      :speed="1600"
      :throttleDelay="50"
      centerMode
    >

      <div v-for="slide in slides" :key="slide.id" class="slide pt-16 bg-cover bg-center h-full w-100 flex items-center"
        :style="'background-image:url(\'/storage/' + slide.image + '\');'"
      >
        <div class="container flex flex-col py-12 lg:py-32 px-3 mx-auto justify-center items-center">
            <div class="my-4 p-2 text-4xl text-center lg:text-5xl font-bold leading-tight">
              <h1 v-if="slide.order == 1">{{slide.title}}</h1>
              <h2 v-else>{{slide.title}}</h2>
            </div>
            <p class="leading-normal p-2 text-center text-xl mb-8 w-full lg:w-2/3">
              {{slide.body}}
            </p>
            <p class="mx-auto">
              <a :href="getUrl(slide.url)">
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-700 font-bold my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  {{$ml.get('readmore')}}
                </button>
              </a>
            </p>
        </div>
      </div>
      <template class="flex" slot="prevButton">
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden md:block" viewBox="0 0 24 24" fill="#fff"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
      </template>
      <template class="flex" slot="nextButton">
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden md:block" viewBox="0 0 24 24" fill="#fff"><path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/></svg>
      </template>

    </agile>
</template>

<script>
import { VueAgile } from 'vue-agile'
export default {
  props: ['lang', 'slides'],
  components: {
        agile: VueAgile
  },
  methods: {
    getUrl (url) {
      let link = null;
        if (url) {
          if (this.lang == 'ru') {
             link = '/' + url;
          }
          else {
             link = '/' + this.lang + '/' + url;
          }
        }
       return link;
     },
     getCover(url) {
       return 'background-image: url(\'/storage/' + url + '\')';
     }
  }
}
</script>

<style>
.agile__nav-button {
  background: transparent;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 24px;
  height: 100%;
  position: absolute;
  top: 0;
  transition-duration: .3s;
  width: 40px;
}
  .agile__nav-button:hover {
    background: rgba(0, 0, 0, 0.5);
    opacity: 1;
  }
  .agile__nav-button--prev {
    left: 0;
  }
  .agile__nav-button--next {
    right: 0;
  }
.agile__dots {
  bottom: 10px;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
}
.agile__dot {
  margin: 0 10px;
}
.agile__dot  button {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 50%;
    cursor: pointer;
    display: block;
    height: 10px;
    font-size: 0;
    line-height: 0;
    margin: 0;
    padding: 0;
    transition-duration: .3s;
    width: 10px;
  }
  .agile__dot--current,
  .agile__dot--current:hover button {
      background-color: #fff;
  }
// Slides styles
.slide {
  display: block;
  height: 800px;
  object-fit: cover;
  width: 100%;
}
</style>
