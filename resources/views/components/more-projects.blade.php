<div class=" " id="js-reviews">
    <div class="swiper-wrapper">

        @foreach ($projects as $project)
            <a href="/projects/{{ $project->id }}" class="swiper-slide project-card">
                <div class="project-card__image">
                    <img src="{{ $project->card_image }}" alt="">
                </div>
                <div class="project-card__content">
                    <div class="project-card__content--left">
                        <h3 class="project-card__title">{{ $project->card_title }}</h3>
                        <p class="project-card__description">Веб-приложение</p>
                    </div>
                    <div class="project-card__content--right">
                        <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path d="M3 13L13 3M13 3L5.5 3M13 3L13 10.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
