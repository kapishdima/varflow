@extends('layouts.app')
@section('content')
    <div class="burger">
        @include('components/burger-menu')
    </div>
    <div class="layout container">
        <div class="layout__header container">
            @include('components/layout-header')
        </div>

        <h1 class="projects-list__title">@lang('default.projects')</h1>

        <div class="projects-list__container">
            @foreach ($projects as $project)
                <a class="projects-list__card" href="/projects/{{ $project->id }}">
                    <img src="{{ $project->card_image }}" alt="{{ $project->title }}">
                </a>
            @endforeach
        </div>

        @include('components.form')

        <div id="contacts" class="layout__footer container">
            @include('components/layout-footer')
        </div>
    </div>
@endsection
