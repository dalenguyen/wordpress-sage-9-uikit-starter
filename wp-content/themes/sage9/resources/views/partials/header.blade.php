@php
  // $logo = get_template_directory_uri() . '/assets/images/logo.jpg';
  $logo = 'https://www.k4art.com/assets/themes/k4art/img/uikit.png';
@endphp
<header class="banner">
  <div class="uk-container">
    @if ($logo)
      <div class="brand">
        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
          <img src="<?php echo $logo ?>" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
        </a>
      </div>
    @else
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    @endif

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
