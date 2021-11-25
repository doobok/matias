{{-- <a href="#"> --}}
  <div class="w-full sm:w-1/2 lg:w-1/3 p-2 h-64 hover:border-4 border-gray-700 gradient--hovered">
    <a href="#" class="w-full h-full shadow-xl flex flex-wrap justify-left items-left content-end bg-cover bg-center"
    :style="'background-image:url({{ Voyager::image( $solution->image ) }});'"
    >
    <div class="w-full self-end">
      {{-- <div class="text-white bg-gray-700 text-lg text-left font-bold my-6 px-6"> --}}
      <div class="text-white uppercase text-xl text-left font-black my-6 px-6">
        <p class="py-1 txt-contured">
          {{$solution->getTranslatedAttribute('title')}}
        </p>
      </div>
    </div>

    </a>
  </div>

{{-- </a> --}}
