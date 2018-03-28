<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('includes.nav')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.d-flex', {
          duration: 2000,
          origin:'right'
        });
        sr.reveal('.jumbotron', {
          duration: 2000,
          origin:'left',
          distance:'300px'
        });
        
        sr.reveal('.col-md-4', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.btn-primary', {
          duration: 2000,
          delay: 1500,
          origin:'right'
        });
        sr.reveal('btn-secondary', {
          duration: 2000,
          origin:'left'
        });
        sr.reveal('card-body', {
          duration: 2000,
          origin:'bottom',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.card', {
          duration: 2000,
          origin:'right',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.pricing-header', {
          duration: 2000,
          origin:'left',
          distance:'300px',
          viewFactor: 0.2
        });
    </script>

    <script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
</body>
</html>
