<template>
  <div @mouseover="openLng = true" @mouseleave="leaveLng()" class="relative inline-block text-left ml-3">
    <div>
      <button @click="openLng = ! openLng" class="underline inline-flex items-center justify-center p-2 text-gray-600 opacity-40 hover:opacity-100 hover:text-gray-500 bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out text-sm">
        <span class="uppercase" v-if="lang != 'uk'">{{lang}}</span>
        <span class="uppercase" v-else>UA</span>
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <div v-show="openLng" class="origin-top-right absolute right-0 mt-0 w-auto shadow-lg bg-white ring-1 ring-black ring-opacity-5">
      <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">

        <a v-for="l in langs" v-if="l.code != lang" :href="'/setlocale/' + l.code" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" rel="nofollow">{{l.name}}</a>

      </div>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['lang'],
      data(){
            return{
              langs: [
                {'code':'ru', 'name':'RU'},
                {'code':'uk', 'name':'UA'},
                {'code':'en', 'name':'EN'}
              ],
              openLng: false,
            }
        },
        methods: {
          leaveLng() {
            if (this.openLng) {
              setTimeout(() => {
                this.openLng = false;
              }, 1000);
            }
          }
        },
        mounted() {
          // default styles
          var scrollpos = window.scrollY;
          var header = document.getElementById("header");
          var navcontent = document.getElementById("nav-content");
          var contactstr = document.getElementById("contactStr");
          var toToggle = document.querySelectorAll(".toggleColour");

          document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;
            if (scrollpos > 35) {
              header.classList.add("bg-white");
              header.classList.add("top-0");
              header.classList.remove("gradient");
              contactstr.classList.add("hidden");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("t--ptimary");
                toToggle[i].classList.remove("text-white");
              }
              header.classList.add("shadow");
              navcontent.classList.remove("bg-gray-100");
              navcontent.classList.add("bg-white");
              navcontent.classList.remove("lg:text-white");
            } else {
              header.classList.remove("bg-white");
              header.classList.remove("top-0");
              header.classList.add("gradient");
              contactstr.classList.remove("hidden");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("t--ptimary");
              }
              header.classList.remove("shadow");
              navcontent.classList.remove("bg-white");
              navcontent.classList.add("bg-gray-100");
              navcontent.classList.add("lg:text-white");
            }
          });
          // dropdown menu
          var navMenuDiv = document.getElementById("nav-content");
          var navMenu = document.getElementById("nav-toggle");

          document.onclick = check;
          function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
              // click NOT on the menu
              if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                  navMenuDiv.classList.remove("hidden");
                } else {
                  navMenuDiv.classList.add("hidden");
                }
              } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
              }
            }
          }
          function checkParent(t, elm) {
            while (t.parentNode) {
              if (t == elm) {
                return true;
              }
              t = t.parentNode;
            }
            return false;
          }

        },

        // set lang Global
        created: function(){
          this.$ml.change(this.lang)
      }


  }


</script>
