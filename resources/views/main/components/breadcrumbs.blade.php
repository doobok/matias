<section class="bg-gray-100 py-4">
  <div class="container mx-auto px-2">
      <ol itemscope type="none" itemtype="https://schema.org/BreadcrumbList" class="list-reset pl-4 py-4 flex flex-inline overflow-x-auto text-gray-500">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
            class="whitespace-nowrap pr-2"><a href="{{route('mainpage')}}" class="no-underline">
          <span class="float-left pr-2 hidden sm:block">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h18v-10h3zm-5 8h-14v-10.26l7-6.912 7 6.99v10.182zm-5-1h-4v-6h4v6z"/></svg>
          </span>
          <span>
            {{__('site.mainpage')}}
          </span>
          </a>
          <meta itemprop="position" content="1" />
        </li>

        @foreach ($crumbs as $key => list($uri, $title))
          <span class="whitespace-nowrap mx-3">/</span>
          <li class="whitespace-nowrap px-2" itemprop="itemListElement" itemscope
              itemtype="https://schema.org/ListItem">

            @if (!$uri)
              <a class="underline" itemprop="item" href="{{url()->current()}}">
            @else
              <a class="no-underline" itemprop="item" href="{{ $uri }}">
            @endif

                <span itemprop="name">{{ $title }}</span></a>
            <meta itemprop="position" content="{{ $key + 2 }}" />
          </li>
        @endforeach

      </ol>
  </div>
</section>
<section class="pl-4 pt-6 pb-1">
  <div class="container mx-auto px-2">
    <h1 class="w-full my-2 text-4xl md:text-5xl font-bold leading-tight text-gray-700">
      {{$h1}}
    </h1>
  </div>
</section>
