<div class="price-slider">
    <div class="swiper-container" id="js-prices">
        <div class="swiper-wrapper">
            <div class="swiper-slide price-card">
                <div class="price-card-content">
                    <div class="price-card-content__top">
                        <p class="price-card-content__top--old">20$/час</p>
                        <p class="price-card-content__top--actual">15$/час</p>
                        <p class="price-card-content__top--service">@lang('default.development_service_title')</p>
                    </div>

                    <ul class="price-card__list">
                        @foreach (explode('|', __('default.development_services_prices')) as $developmentService)
                            <li class="price-card__list--item">{{ $developmentService }}</li>
                        @endforeach
                    </ul>

                    <a class="link price-card__link" href="#contact-form">@lang('default.start_project_text')

                        <span class="link__icon price-card__link--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path class="link__icon--path"
                                    d="M3.65377 9.60377C3.44874 9.80879 3.44874 10.1412 3.65377 10.3462C3.85879 10.5513 4.19121 10.5513 4.39623 10.3462L9.45 5.29246L9.45 9.275C9.45 9.56495 9.68505 9.8 9.975 9.8C10.2649 9.8 10.5 9.56495 10.5 9.275L10.5 4.025C10.5 3.95382 10.4858 3.88594 10.4602 3.82404C10.4351 3.76352 10.3983 3.70674 10.3496 3.65721C10.3474 3.65491 10.3451 3.65262 10.3428 3.65036C10.2933 3.60172 10.2365 3.56487 10.176 3.53984C10.1141 3.51417 10.0462 3.5 9.975 3.5L4.725 3.5C4.43505 3.5 4.2 3.73505 4.2 4.025C4.2 4.31495 4.43505 4.55 4.725 4.55L8.70754 4.55L3.65377 9.60377Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </a>
                    {{-- <a href="#" class="price-card__bottom-link">Как рассчитывается стоимость?</a> --}}
                </div>
            </div>
            <div class="swiper-slide price-card">
                <div class="price-card-content">
                    <div class="price-card-content__top">
                        <p class="price-card-content__top--old">20$/час</p>
                        <p class="price-card-content__top--actual">15$/час</p>
                        <p class="price-card-content__top--service">@lang('default.design_service_title')</p>
                    </div>

                    <ul class="price-card__list">
                        @foreach (explode('|', __('default.design_services_prices')) as $designService)
                            <li class="price-card__list--item">{{ $designService }}</li>
                        @endforeach
                    </ul>

                    <a class="link price-card__link" href="#contact-form">@lang('default.start_project_text')

                        <span class="link__icon price-card__link--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path class="link__icon--path"
                                    d="M3.65377 9.60377C3.44874 9.80879 3.44874 10.1412 3.65377 10.3462C3.85879 10.5513 4.19121 10.5513 4.39623 10.3462L9.45 5.29246L9.45 9.275C9.45 9.56495 9.68505 9.8 9.975 9.8C10.2649 9.8 10.5 9.56495 10.5 9.275L10.5 4.025C10.5 3.95382 10.4858 3.88594 10.4602 3.82404C10.4351 3.76352 10.3983 3.70674 10.3496 3.65721C10.3474 3.65491 10.3451 3.65262 10.3428 3.65036C10.2933 3.60172 10.2365 3.56487 10.176 3.53984C10.1141 3.51417 10.0462 3.5 9.975 3.5L4.725 3.5C4.43505 3.5 4.2 3.73505 4.2 4.025C4.2 4.31495 4.43505 4.55 4.725 4.55L8.70754 4.55L3.65377 9.60377Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </a>

                    {{-- <a href="#" class="price-card__bottom-link">Как рассчитывается стоимость?</a> --}}
                </div>
            </div>

        </div>
    </div>
</div>
