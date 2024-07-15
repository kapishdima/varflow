@extends('layouts.app')
@section('title', $post->title)
@section('description', $post->description)
@section('keywords', $post->keywords)

@section('content')
    <div class="burger">
        @include('components/burger-menu')
    </div>
    <div class="layout">
        <div class="layout__header container">
            @include('components/layout-header')
        </div>

        <div class="post container">
            <h1 class="post-title">
                {{ $post->title }}
            </h1>

            <div class="post-image-container">
                <img src="{{ $post->image }}" alt="" class="post-image">
            </div>


            <div class="post-content">
                {!! $post->content !!}
            </div>

            <h2 class="layout__heading" id="contact-form">
                Сделайте первый шаг к своему идеальному проекту
            </h2>
            @include('components.form')
        </div>



        <div id="contacts" class="layout__footer container">
            @include('components/layout-footer')
        </div>

    </div>
@endsection
