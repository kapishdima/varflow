@extends('layouts.app')
@section('content')
<div class="burger">
    @include('components/burger-menu')
</div>
<div class="layout">
    <div class="layout__first-screen">
        <div class="layout__header container">
            @include('components/layout-header')
        </div>
        <div class="layout__offer-section container">
            @include ('components/offer-section')
        </div>
        @include('components.ticker')
    </div>
    <div id="aboutUs" class="layout__about-us-section container">
        @include('components/about-us-section')
    </div>
    <div id="ourWorks" class="layout__projects-section">
        <div class="mobile-hidden">@include('components.case-section')</div>
        <div class="container">
            <div class="desktop-hidden">
                <h2 class="layout__heading layout__reviews-section--heading">
                    Наши работы
                </h2>
                @include('components.case-section-mobile')
            </div>
        </div>
    </div>

    <div id="price" class="layout__price-cards-section">
        @include('components.price-cards')
    </div>
    <div id="price" class="layout__price-cards-section--mobile">
        <div class='container'>
            <h2 class="layout__heading layout__reviews-section--heading">
                Цены
            </h2>
            @include('components.price-cards-section-mobile')
        </div>
    </div>
    <div id="startProject" class="layout__form-section container">
        <h2 class="layout__heading">
            Сделайте первый шаг к своему идеальному проекту
        </h2>
        @include('components.form')
    </div>

    <div id="reviews" class="layout__reviews-section">
        <div class='container'>
            <h2 class="layout__heading layout__reviews-section--heading">
                Что о нас говорят наши клиенты
            </h2>
        </div>
        @include('components/reviews-section')
    </div>
    <div id="contacts" class="container">
        @include('components/layout-footer')
    </div>
</div>
@include('components/success-modal')
@endsection