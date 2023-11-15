@extends('layouts.app')
@section('content')
<div class="burger">
    @include('components/burger-menu')
</div>
<div class="layout">
    <div class="layout__header container">
        @include('components/layout-header')
    </div>
    <div class="layout__case container">
        @include('components/case-preview')
    </div>
    <div class="layout__project-form-section container">
        <h2 class="layout__heading">
            Сделайте первый шаг к своему идеальному проекту
        </h2>
        @include('components.form')
    </div>
    <div class="layout__more-projects container">
        <h2 class="layout__heading">
            Больше проектов
        </h2>
        @include('components.more-projects')
    </div>
    <div id="contacts" class="container">
        @include('components/layout-footer')
    </div>
</div>
@endsection