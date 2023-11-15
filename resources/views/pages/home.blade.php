@extends('layouts.app')
@section('content')
<div class="burger">
    @include('components/burger-menu')
</div>
<div class="layout">
    <div class="layout__header container">
        @include('components/layout-header')
    </div>
    <div class="layout__offer-section container">
        @include ('components/offer-section')
    </div>
    <div class=" layout__offer-section layout__offer-section--mobile container">
        @include ('components/offer-section-mobile')
    </div>
    @include('components.ticker')
    <div id="aboutUs" class="layout__about-us-section container">
        @include('components/about-us-section')
    </div>
    <div id="ourWorks" class="layout__projects-section">

    </div>

    <div id="price" class="layout__price-cards-section">
        @include('components.price-cards')
    </div>
    <div class="layout__form-section container">
        <h2 class="layout__heading">
            Сделайте первый шаг к своему идеальному проекту
        </h2>
        @include('components.form')
    </div>

    <div id="reviews" class="layout__reviews-section">
        <div class='container'>
            <h2 class="layout__heading ">
                Что о нас говорят наши клиенты
            </h2>
        </div>
        @include('components/reviews-section')
    </div>
    <div id="contacts" class="container">
        @include('components/layout-footer')
    </div>
</div>
@endsection