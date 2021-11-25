<section class="bg-white">

  @include('main.layouts.partials.tr.top_gray')

  <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h2 class="w-full my-2 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
      {{__('site.our-partners')}}
    </h2>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <mp-carousel-logo :items="{{$vendors}}" class="py-1 sm:py-10"></mp-carousel-logo>

    <div class="flex items-center justify-center pt-4">
      <a href="{{route('partners')}}">
        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold my-6 py-6 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          {{__('site.see-partners')}}
        </button>
      </a>
    </div>

  </div>

  @include('main.layouts.partials.tr.bottom_gray')

</section>
