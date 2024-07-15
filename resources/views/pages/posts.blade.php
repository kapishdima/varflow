@extends('layouts.app')
@section('content')
    <div class="burger">
        @include('components/burger-menu')
    </div>
    <div class="layout container">
        <div class="layout__header container">
            @include('components/layout-header')
        </div>

        <h1 class="posts-list__title">@lang('default.posts')</h1>

        <div class="posts-list__container">
            @foreach ($posts as $post)
                <a class="posts-list__card" href="/posts/{{ $post->id }}">
                    <div class="posts-list__card-image-container">
                        <img src="{{ $post->card_image }}" alt="{{ $post->title }}">
                    </div>
                    <h3 class="posts-list__card-title">
                        {{ $post->title }}
                    </h3>
                </a>
            @endforeach
        </div>

        @include('components.form')

        <div id="contacts" class="layout__footer container">
            @include('components/layout-footer')
        </div>
    </div>
@endsection
