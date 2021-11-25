<template>
  <div class="">

    <button @click="open = true" class="mx-auto lg:mx-0 hover:underline font-bold my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
    :class="color">
      {{title}}
    </button>

      <phone-form :open="open" @closemodal="open = false"></phone-form>

  </div>
</template>

<script>
export default {
  props: ['title', 'color'],
  data(){
        return{
          open: false,
        }
    },
  }
</script>
