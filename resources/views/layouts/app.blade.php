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
    <meta name="description" content="">
    <meta name="description" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue:regular" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,200,300,regular,500,600,700,100italic,200italic,300italic,italic,500italic,600italic,700italic" rel="stylesheet" />

    {{ useFrontStyles() }}

</head>

<body id="{{ $page ?? '' }}">

    <main class="content">
        @yield('content')
    </main>


    {{ useFrontJS() }}
</body>

</html>