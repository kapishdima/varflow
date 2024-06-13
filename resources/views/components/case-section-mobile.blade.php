<div class="swiper-container" id="case-mobile">
    <div class="swiper-wrapper">
        @foreach ($projects as $project)
            <div class="swiper-slide">
                <div class="case-mobile">
                    <div class="case-mobile__slider case-mobile-slider">
                        <div class="case-mobile__slide case-mobile-slider__item">
                            <img src="{{ $project->card_image }}" class="case-mobile-slider__image">
                            <a href="/projects/{{ $project->id }}" class="case-mobile-slider__bottom">
                                <span
                                    class="case-mobile__font case-mobile__font--bottom-link">{{ $project->card_title }}</span>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="28" height="28" rx="14" fill="white" />
                                    <path
                                        d="M10.6538 16.6038C10.4487 16.8088 10.4487 17.1412 10.6538 17.3462C10.8588 17.5513 11.1912 17.5513 11.3962 17.3462L16.45 12.2925L16.45 16.275C16.45 16.5649 16.6851 16.8 16.975 16.8C17.2649 16.8 17.5 16.5649 17.5 16.275L17.5 11.025C17.5 10.9538 17.4858 10.8859 17.4602 10.824C17.4351 10.7635 17.3983 10.7067 17.3496 10.6572C17.3474 10.6549 17.3451 10.6526 17.3428 10.6504C17.2933 10.6017 17.2365 10.5649 17.176 10.5398C17.1141 10.5142 17.0462 10.5 16.975 10.5L11.725 10.5C11.4351 10.5 11.2 10.735 11.2 11.025C11.2 11.3149 11.4351 11.55 11.725 11.55L15.7075 11.55L10.6538 16.6038Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
