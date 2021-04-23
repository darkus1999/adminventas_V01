<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <!-- CSRF Token -->
        <meta content="{{ csrf_token() }}" name="csrf-token"/>
        <title>
            {{ config('app.name', 'Cliente') }}
        </title>
        <!-- Styles -->
        <link href="{{ asset('plugin/bootstrap/bootstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/bootstrap/datepicker.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/font-awesome/font-awesome.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/form-field/jquery.formstyler.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/revolution-plugin/extralayers.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/revolution-plugin/settings.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/owl-carousel/owl.theme.default.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/slick-slider/slick-theme.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/magnific/magnific-popup.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugin/animation/animate.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
    </head>
    <body>
        @yield('contenido')
        <!-- Scripts -->
    </body>
</html>
<script src="{{ asset('js/jquery.min.js') }}">
</script>
<script src="{{ asset('plugin/bootstrap/bootstrap.min.js') }}">
</script>
<script src="{{ asset('plugin/bootstrap/bootstrap-datepicker.js') }}">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os">
</script>
<script src="{{ asset('plugin/form-field/jquery.formstyler.min.js') }}">
</script>
<script src="{{ asset('plugin/revolution-plugin/jquery.themepunch.plugins.min.js') }}">
</script>
<script src="{{ asset('plugin/revolution-plugin/jquery.themepunch.revolution.min.js') }}">
</script>
<script src="{{ asset('plugin/owl-carousel/owl.carousel.min.js') }}">
</script>
<script src="{{ asset('plugin/slick-slider/slick.min.js') }}">
</script>
<script src="{{ asset('plugin/isotop/isotop.js') }}">
</script>
<script src="{{ asset('plugin/isotop/packery-mode.pkgd.min.js') }}">
</script>
<script src="{{ asset('plugin/magnific/jquery.magnific-popup.min.js') }}">
</script>
<script src="{{ asset('plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}">
</script>
<script src="{{ asset('plugin/animation/wow.min.js') }}">
</script>
<script src="{{ asset('plugin/parallax/jquery.stellar.js') }}">
</script>
<script src="{{ asset('js/preview.js') }}">
</script>
<script src="{{ asset('js/script.js') }}">
</script>
