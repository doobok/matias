@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{$page->getTranslatedAttribute('title')}} @endslot
  @slot('description') {{$page->getTranslatedAttribute('description')}} @endslot
  @slot('image') @if($page->seo_image == true)
        {{ Voyager::image( $page->seo_image ) }}@else
        {{ Voyager::image( $page->image ) }}@endif
  @endslot
  @slot('date') {{$page->created_at}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => $breadcrumbs,
    'h1' => $page->getTranslatedAttribute('heading')
    ])
  @endcomponent

  <section class="text-gray-700 py-4">
    <article class="container mx-auto py-4 px-4">

      @isset($page->image)
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-6 float-right">
          <img class="w-full shadow-lg border-2 rounded-sm" src="{{ Voyager::image( $page->image ) }}" alt="{{$page->getTranslatedAttribute('heading')}}">
        </div>
      @endisset

      <div>
        {!!$page->getTranslatedAttribute('body')!!}

      </div>

      <div class="w-full my-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      {{-- youtube--}}
      @isset($page->youtube)
        @include('main.layouts.partials.modules.youtube')
      @endisset
      {{-- end youtube--}}

      <div class="flex justify-end">
          @include('main.components.sh')
      </div>

    </article>
  </section>

  @include('main.layouts.partials.tr.bottom')

@endsection
