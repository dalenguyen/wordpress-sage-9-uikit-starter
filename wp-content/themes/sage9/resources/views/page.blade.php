@extends('layouts.app')

@section('content')
  <div class="page-layout uk-section">
    <div class="uk-container">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        @include('partials.content-page')
      @endwhile
    </div>
</div>
@endsection
