<div class="case" data-el="case-container">
    <div class="case__content">
        <div class="case__slider slider slider__wrapper">
            <div class=" " id="case-top">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide case__slide">
                            <a class="case__link" href="/projects/{{ $project->id }}"></a>
                            <img src="{{ $project->card_image ?? $project->main_image }}" alt=""
                                class="slider__slide"></img>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="case__slider slider slider__wrapper">
            <div class=" " id="case-middle">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide case__slide">
                            <a class="case__link" href="/projects/{{ $project->id }}"></a>
                            <img src="{{ $project->card_image ?? $project->main_image }}" alt=""
                                class="slider__slide"></img>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="case__slider slider slider__wrapper">
            <div class=" " id="case-bottom">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide case__slide">
                            <a class="case__link" href="/projects/{{ $project->id }}"></a>
                            <img src="{{ $project->card_image ?? $project->main_image }}" alt=""
                                class="slider__slide"></img>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
