<?php

use App\Models\Media;
use Illuminate\Support\Facades\Vite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (!function_exists('locUrl')) {
    function locUrl($url)
    {
        return LaravelLocalization::localizeUrl($url);
    }
}

if (!function_exists('viteAsset')) {
    function viteAsset($url)
    {
        return Vite::asset($url, 'build/front');
    }
}

if (!function_exists('useFrontStyles')) {
    function useFrontStyles()
    {
        return Vite::useBuildDirectory('build/front')->withEntryPoints('resources/sass/app.scss');
    }
}
if (!function_exists('useFrontJS')) {
    function useFrontJS()
    {
        return Vite::useBuildDirectory('build/front')->withEntryPoints(['resources/js/front/app.js', 'resources/js/front/preloader/index.js']);
    }
}

if (!function_exists('useAdminAssets')) {
    function useAdminAssets()
    {
        return Vite::useBuildDirectory('build/admin')->withEntryPoints('resources/js/admin/index.tsx');
    }
}
