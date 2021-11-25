<div class="w-full flex items-stretch rounded-t sm:w-1/2 lg:w-1/3 p-6">
  <div class="bg-white rounded-b-none overflow-hidden shadow">
    <a href="{{route('project', [$project->slug]) }}" class="flex flex-wrap no-underline hover:no-underline">
      <div class="w-full flex items-center">
        <img class="self-center" src="{{ Voyager::image( $project->thumbnail('cropped') ) }}" alt="{{$project->getTranslatedAttribute('heading')}}">
      </div>
      <div class="w-full text-lg font-bold text-gray-800 mt-6 px-6">
        {{$project->getTranslatedAttribute('heading')}}
      </div>
      <div class="w-full text-lg text-gray-800 mt-2 mb-2 px-6 md:h-34 lg:h-26">
        {{ mb_substr($project->getTranslatedAttribute('teaser'), 0, 70) }}
          ...
      </div>
      <div class="inline-flex mb-2 px-6">
          <svg class="h-6 w-6 text-gray-600 t--ptimary fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></path>
          </svg>
          <p><span class="text-gray-900 font-bold text-lg">{{$project->year}}</span></p>
      </div>
    </a>
    <div class="flex justify-center p-4 border-t border-gray-300 text-gray-700 bg-white overflow-hidden p-6">
        <div>
          <a href="{{route('project', [$project->slug]) }}">
            <button class="hover:underline gradient text-white font-bold my-1 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              {{__('site.readmore')}}
            </button>
          </a>
        </div>
    </div>
  </div>

</div>
