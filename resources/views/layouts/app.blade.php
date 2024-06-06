<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@lang('default.site_name')</title>
    <meta name="description" content=@lang('default.site_desc')>


    <!-- Основные метатеги для SEO -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content=@lang('default.site_keywords')>
    <meta name="author" content="Varflow">

    <!-- Open Graph для социальных сетей -->
    <meta property="og:title" content=@lang('default.site_name')>
    <meta property="og:site_name" content=@lang('default.site_name')>
    <meta property="og:description" content=@lang('default.site_desc')>
    <meta property="og:image" content="url_to_your_image.jpg">
    <meta property="og:image:alt" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="canonical" href="http://varflow.com.ua">
    <meta property="og:url" content="http://varflow.com.ua">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <!-- Теги Twitter для социальных сетей -->
    <meta name="twitter:title" content=@lang('default.site_name')>
    <meta name="twitter:site" content="Varflow">
    <meta name="twitter:description" content=@lang('default.site_desc')>
    <meta name="twitter:image" content="url_to_your_image.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#4ea62f">
    <meta name="msapplication-TileColor" content="#4ea62f">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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