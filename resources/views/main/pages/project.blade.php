@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{$page->getTranslatedAttribute('heading')}} @endslot
  @slot('description') {{$page->getTranslatedAttribute('teaser')}} @endslot
  @slot('image') @isset($page->image) {{ Voyager::image( $page->image ) }} @endisset @endslot
  @slot('date') {{$page->created_at}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => [
        [route('portfolio'), __('site.portfolio')],
        ['', $page->getTranslatedAttribute('heading')]
      ],
    'h1' => $page->getTranslatedAttribute('heading')
    ])
  @endcomponent

  <section class="text-gray-700 py-4">
    <article class="container mx-auto py-4 px-2">
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 p-6 pt-0">
          <blockquote class="text-xl">
            {!!$page->getTranslatedAttribute('description')!!}
          </blockquote>
        </div>
        <div class="w-full sm:w-1/2 p-6 pt-0 mb-9">
          <img class="w-full shadow-lg border-2 rounded-sm p-2 origin-center transform rotate-1" src="{{ Voyager::image( $page->image ) }}" alt="{{$page->getTranslatedAttribute('heading')}}">

        </div>
      </div>
      <div class="px-4">
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

  <section class="py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <p class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800">
        {{__('site.other-projects')}}
      </>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      <div class="flex flex-wrap items-start place-items-auto">

        @foreach ($projects as $project)
          @include('main.layouts.partials.modules.project')
        @endforeach

      </div>

    </div>
  </section>


  @include('main.layouts.partials.tr.bottom')

@endsection
