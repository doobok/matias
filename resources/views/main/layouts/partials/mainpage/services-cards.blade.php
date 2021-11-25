<section class="bg-white bg-right-top bg-no-repeat bg-100 lg:bg-50 bg-right-multigons">
  @include('main.layouts.partials.tr.top')

  <div class="align-middle">
      <h2 class="w-full my-2 text-3xl sm:text-5xl font-bold leading-tight text-center text-gray-800">
      {{__('site.our-services')}}
    </h2>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
  </div>

  <div class="container flex flex-wrap justify-center max-w-6xl my-12 mx-auto mx-8">

    @foreach ($solutions as $indx => $solution)

      @include('main.layouts.partials.modules.service')

    @endforeach

    <div class="w-full sm:w-1/2 lg:w-1/3 p-2 h-64 hover:border-4 border-gray-700 gradient--hovered">
      <a href="{{route('services')}}" class="w-full h-full shadow-xl flex flex-wrap justify-left items-left content-end bg-cover bg-center"
      :style="'background-image:url(/services-pic.jpg);'"
      >
      <div class="w-full self-end">
        <div class="text-white uppercase text-xl text-left font-black my-6 px-6">
          <p class="py-1 txt-contured">
            {{__('site.another-services')}}
          </p>
        </div>
      </div>

      </a>
    </div>



  </div>

  @include('main.layouts.partials.tr.bottom')

</section>
