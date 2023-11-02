<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <meta property="og:site_name" content=@lang('default.site_name')>
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
    <link rel="icon" type="image/png" href="/favicon/favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&family=Roboto+Condensed&family=Inter&display=swap"
        rel="stylesheet">

    {{ useFrontStyles() }}

</head>

<body id="{{ $page ?? '' }}">

    <main class="content">
        @yield('content')
    </main>


    {{ useFrontJS() }}
</body>

</html>
