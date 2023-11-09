@extends('layouts.app')
@section('content')
<div class="layout">
    <div class="layout__header container">
        @include('components/layout-header')
    </div>
    <div class="layout__offer-section container">
        @include ('components/offer-section')
    </div>
    @include('components.ticker')
    <div class="layout__about-us-section container">
        @include('components/about-us-section')
    </div>
    <div class="layout__projects-section">

    </div>

    <div class="layout__price-cards-section">
        @include('components.price-cards')
    </div>
    <div class="layout__form-section container">
        <h2 class="layout__heading">
            Сделайте первый шаг к своему идеальному проекту
        </h2>
        @include('components.form')
    </div>

    <div class="layout__reviews-section">
        <div class='container'>
            <h2 class="layout__heading ">
                Что о нас говорят наши клиенты
            </h2>
        </div>
        @include('components/reviews-section')
    </div>
    <div class="container">
        @include('components/layout-footer')
    </div>
</div>
@endsection