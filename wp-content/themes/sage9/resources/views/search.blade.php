@extends('layouts.app')

@section('content')
  <div class="page-layout uk-section">
    <div class="uk-container">
      @include('partials.page-header')

      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-search')
      @endwhile

      {!! get_the_posts_navigation() !!}
    </div>
  </div>
@endsection
