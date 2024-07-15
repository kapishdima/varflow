<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', __('default.site_name'))</title>
    <meta name="description" content="@yield('description', __('default.site_desc'))">


    <!-- Основные метатеги для SEO -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="@yield('keyword', __('default.site_keywords'))">
    <meta name="author" content="Varflow">

    <!-- Open Graph для социальных сетей -->
    <meta property="og:title" content="@yield('og:title', __('default.site_name'))">
    <meta property="og:site_name" content="@yield('og:site_name', __('default.site_name'))">
    <meta property="og:description" content="@yield('og:description', __('default.site_desc'))">
    <meta property="og:image" content="url_to_your_image.jpg">
    <meta property="og:image:alt" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="canonical" href="https://varflow.com.ua">
    <meta property="og:url" content="https://varflow.com.ua">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <!-- Теги Twitter для социальных сетей -->
    <meta name="twitter:title" content="@yield('twitter:title', __('default.site_name'))">
    <meta name="twitter:site" content="Varflow">
    <meta name="twitter:description" content="@yield('twitter:description', __('default.site_desc'))">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    {{ useFrontStyles() }}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MDNWBCCPMR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MDNWBCCPMR');
    </script>

</head>

<body id="{{ $page ?? '' }}">

    <main class="content">
        @yield('content')
    </main>


    {{ useFrontJS() }}
</body>

</html>
