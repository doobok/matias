<nav id="header" class="fixed w-full z-30 text-white gradient">

  <div id="contactStr" class="w-full text-gray-600 bg-gray-200 align-baseline">
    <div class="w-full container mx-auto flex flex-wrap justify-between items-center mt-0 py-1">
      <div class="pl-4 flex flex-wrap items-center">
        <span class="mr-4 hidden md:block">{{__('site.global-address')}}</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20px" height="20px" fill="currentColor">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
        </svg>
        {{-- <span class="ml-1 mr-2"><a href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone'))}}">{{setting('site.phone')}}</a>;</span> --}}
        <span class="ml-1 mr-2"><a href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone2'))}}">{{setting('site.phone2')}}</a></span>
        {{-- telegram --}}
        <svg class="mx-1" title="Telegram" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M18.384 22.779a1.19 1.19 0 001.107.145 1.16 1.16 0 00.724-.84C21.084 18 23.192 7.663 23.983 3.948a.78.78 0 00-.26-.758.8.8 0 00-.797-.14C18.733 4.602 5.82 9.447.542 11.4a.827.827 0 00-.542.799c.012.354.25.661.593.764 2.367.708 5.474 1.693 5.474 1.693s1.452 4.385 2.209 6.615c.095.28.314.5.603.576a.866.866 0 00.811-.207l3.096-2.923s3.572 2.619 5.598 4.062zm-11.01-8.677l1.679 5.538.373-3.507 10.185-9.186a.277.277 0 00.033-.377.284.284 0 00-.376-.064L7.374 14.102z"/></svg>
        {{-- viber --}}
        <svg class="mx-1" title="Viber" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.892 13.745s.427.038.656-.247l.448-.563c.216-.28.738-.458 1.249-.174.676.382 1.55.982 2.149 1.541.33.278.407.688.182 1.121l-.002.009a4.71 4.71 0 01-.932 1.148l-.009.006c-.44.367-.946.58-1.487.404l-.01-.014c-.972-.275-3.304-1.464-4.79-2.649-2.431-1.918-4.159-5.082-4.637-6.778l-.015-.01c-.176-.543.039-1.049.404-1.488l.007-.008a4.668 4.668 0 011.148-.932l.009-.002c.432-.225.842-.149 1.121.182.367.379 1.056 1.291 1.54 2.149.284.51.106 1.033-.173 1.248l-.564.448c-.284.23-.247.657-.247.657s.834 3.156 3.953 3.952zm4.907-2.616a.304.304 0 01-.304-.302c-.014-1.83-.564-3.288-1.634-4.332-1.072-1.045-2.427-1.581-4.027-1.592a.302.302 0 01-.301-.306.302.302 0 01.303-.301h.002c1.762.012 3.258.606 4.447 1.764 1.19 1.162 1.802 2.765 1.817 4.763a.304.304 0 01-.301.306h-.002zm-1.595-.624h-.007a.304.304 0 01-.297-.31c.024-1.038-.273-1.878-.906-2.569-.63-.689-1.495-1.065-2.645-1.149a.305.305 0 01-.281-.325.305.305 0 01.325-.281c1.294.095 2.32.548 3.049 1.345.733.8 1.092 1.807 1.065 2.992a.304.304 0 01-.303.297zm-1.558-.522a.303.303 0 01-.303-.289c-.051-1.03-.537-1.534-1.527-1.588a.303.303 0 11.032-.606c1.308.07 2.034.819 2.101 2.164a.302.302 0 01-.288.318l-.015.001zm6.817 3.469c-.605 4.877-4.172 5.185-4.83 5.396-.28.09-2.882.737-6.152.524 0 0-2.438 2.94-3.199 3.705-.119.119-.258.167-.352.145-.131-.032-.167-.188-.165-.414l.02-4.016v-.001C2.023 17.468 2.3 12.496 2.354 9.893c.054-2.603.543-4.736 1.996-6.17 2.61-2.364 7.987-2.011 7.987-2.011 4.541.02 6.717 1.387 7.222 1.845 1.675 1.434 2.528 4.867 1.904 9.895zm-.652-11.113c-.597-.548-3.007-2.298-8.375-2.322 0 0-6.33-.382-9.416 2.45C1.302 4.185.698 6.698.634 9.815c-.063 3.118-.146 8.958 5.484 10.542l.006.002-.004 2.416s-.035.979.609 1.179c.779.241 1.236-.502 1.981-1.304.408-.44.971-1.086 1.397-1.58 3.851.322 6.812-.417 7.149-.526.777-.253 5.177-.816 5.893-6.657.738-6.022-.358-9.83-2.338-11.548z"/></svg>
        {{-- whatsapp --}}
        <svg class="mx-1" title="WhatsApp" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>

        <span class="hidden md:block ml-3">{{__('site.shedule-days') . ' ' . setting('site.schedule')}}</span>
      </div>
      {{-- social button --}}
      {{-- <div class="flex">
        <span class="mx-1">
          <a href="#" target="_blank" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20" fill="currentColor"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
          </a>
        </span>
        <span class="mx-1">
          <a href="#" target="_blank" rel="nofollow">
            <svg width="22" height="22" fill="currentColor"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path></svg>
          </a>
        </span>
        <span class="mx-1">
          <a href="#" target="_blank" rel="nofollow">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
          </a>
        </span>
      </div> --}}
    </div>
  </div>

  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{route('mainpage')}}">
        <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 650">
          <path
          class="plane-take-off"
          d="M535.01 421.14l102.42-102.42L318.72 0 106.67 212.05l196.74 196.74-4.51 4.51-196.74-196.74L0 318.72l318.72 318.71L530.5 425.65 333.36 228.51l4.51-4.51 197.14 197.14z"/>
        </svg>
        SNTL
      </a>
    </div>
    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center p-1 text-green-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20 text-gray-700 lg:text-white" id="nav-content">

      @include('main.layouts.partials.navbar-menu')

      <div class="lg:hidden opacity-80 float-right">
        @if (app()->getLocale() != 'ru')
          <span>
            <a href="{{route('setlocale', ['lang' => 'ru'])}}" class="px-4 py-2 ml-1 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 hover:text-gray-900" rel="nofollow">RU</a>
          </span>
        @endif
        @if (app()->getLocale() != 'uk')
        <span>
          <a href="{{route('setlocale', ['lang' => 'uk'])}}" class="px-4 py-2 ml-1 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 hover:text-gray-900" rel="nofollow">UA</a>
        </span>
        @endif
        @if (app()->getLocale() != 'en')
        <span>
          <a href="{{route('setlocale', ['lang' => 'en'])}}" class="px-4 py-2 ml-1 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 hover:text-gray-900" rel="nofollow">EN</a>
        </span>
        @endif
      </div>

      <nav-bar class="hidden lg:block" lang="{{app()->getLocale()}}"></nav-bar>

    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
<div class="h-20 lg:h-28"></div>
