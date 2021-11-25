@foreach ($pages as $page)
  <li>
    @if ($page->children->count())
      <a href="{{route('page', $page->slug)}}">
          {{$page->getTranslatedAttribute('heading')}}
      </a>
      <ul>
        @include('main.layouts.partials.sitemap.list', ['pages' => $page->children])
      </ul>
    @else
      <a href="{{route('page', $page->slug)}}">
          {{$page->getTranslatedAttribute('heading')}}
      </a>
    @endif
  </li>
@endforeach
