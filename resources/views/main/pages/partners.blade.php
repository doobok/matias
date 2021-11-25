@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{__('seo.partners-title')}} @endslot
  @slot('description') {{__('seo.partners-description', [
                        'phone' => setting('site.phone'),
                        'schedule' => setting('site.schedule'),
                        ])}}
  @endslot
  @slot('image') /partners.png @endslot
  @slot('date') {{config('app.startdate')}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => [
        ['', __('site.our-partners')],
      ],
    'h1' => __('site.our-partners')
    ])
  @endcomponent
  <section class="text-gray-700 py-4">
    <div class="container mx-auto py-4 px-2">

      <div class="flex flex-wrap items-center place-items-auto">
        @foreach ($vendors as $vendor)
          <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6">
            <img alt="{{$vendor->name}}"
                title="{{$vendor->name}}"
                class="px-7 py-10"
                src="{{ Voyager::image( $vendor->image ) }}">
          </div>
        @endforeach
      </div>

    </div>
  </section>

  @include('main.layouts.partials.tr.bottom')

@endsection
