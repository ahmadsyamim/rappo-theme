<!doctype html>
<html lang="en" class="no-js">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description" content="@yield('meta_description')">

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
    <meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

    <!-- Icons -->
    <meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
    <meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

    <!-- Styles -->
    <!-- bootstrap.min css -->
    {{ HTML::style('Rappo/plugins/bootstrap/css/bootstrap.min.css') }}
    <!-- Animate Css -->
    {{ HTML::style('Rappo/plugins/animate-css/animate.css') }}
    <!-- Icon Font css -->
    {{ HTML::style('Rappo/plugins/fontawesome/css/all.css') }}
    {{ HTML::style('Rappo/plugins/fonts/Pe-icon-7-stroke.css') }}
    <!-- Themify icon Css -->
    {{ HTML::style('Rappo/plugins/themify/css/themify-icons.css') }}
    <!-- Slick Carousel CSS -->
    {{ HTML::style('Rappo/plugins/slick-carousel/slick/slick.css') }}
    {{ HTML::style('Rappo/plugins/slick-carousel/slick/slick-theme.css') }}
    <!-- Main Stylesheet -->
    {{ HTML::style('Rappo/css/styles.css') }}

    @push('scripts')
    <!-- Main jQuery -->
    {{ HTML::script('Rappo/plugins/jquery/jquery.min.js') }}
    <!-- Bootstrap 3.1 -->
    {{ HTML::script('Rappo/plugins/bootstrap/js/popper.min.js') }}
    {{ HTML::script('Rappo/plugins/bootstrap/js/bootstrap.min.js') }}
    <!-- Slick Slider -->
    {{ HTML::script('Rappo/plugins/slick-carousel/slick/slick.min.js') }}
    {{ HTML::script('Rappo/plugins/jquery/jquery.easing.1.3.js') }}
    <!-- Map Js -->
    {{ HTML::script('Rappo/plugins/google-map/gmap3.min.js') }}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
    {{ HTML::script('Rappo/plugins/form/contact.js') }}
    {{ HTML::script('Rappo/js/scripts.js') }}
    @endpush

    @if (setting('site.google_analytics_tracking_id'))
    <!-- Google Analytics (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>
    @endif
    @if (setting('admin.google_recaptcha_site_key'))
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script>
            function setFormId(formId) {
                window.formId = formId;
            }

            function onSubmit(token) {
                document.getElementById(window.formId).submit();
            }
        </script>
    @endif

</head>
<body class="body masthead" id="page-top">
