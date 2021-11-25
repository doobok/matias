<section class="bg-gray-100 pt-6">
  <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h2 class="w-full my-2 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
      {{__('site.our-сustomers')}}
    </h2>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <mp-carousel-logo :items="{{$customers}}" class="py-1 sm:py-10"></mp-carousel-logo>

  </div>
</section>
