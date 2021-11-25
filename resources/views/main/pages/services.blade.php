@extends('main.app')

@section('head')
@component('main.components.meta')

  @slot('title') {{__('seo.services-title')}} @endslot
  @slot('description') {{__('seo.services-description', [
                        'phone' => setting('site.phone'),
                        'schedule' => setting('site.schedule'),
                        ])}}
  @endslot
  @slot('image') /services.png @endslot
  @slot('date') {{config('app.startdate')}} @endslot

@endcomponent
@endsection

@section('content')

  @component('main.components.breadcrumbs', [
    'crumbs' => [
        ['', __('site.services')],
      ],
    'h1' => __('site.services')
    ])
  @endcomponent

  <section class="text-gray-700 pb-4">

    <div class="container flex flex-wrap justify-center my-12 mx-auto mx-8">

      @foreach ($services as $indx => $solution)

        @include('main.layouts.partials.modules.service')

      @endforeach

    </div>

  </section>

  @include('main.layouts.partials.tr.bottom')

@endsection
