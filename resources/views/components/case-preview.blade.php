<div class="case-block">
    <div class="case-top case-block__top">
        <h2 class="case-title">{{ $project->title }}</h2>
        <div class="case-top__img">
            <img src="{{ $project->main_image }}" alt="">
        </div>
        <div class="case-top__info info">
            <div class="info-left">
                <div class="info-left__top">
                    <h3 class="info-left__title">{{ $project->type }}</h3>
                    <div class="info-left-taggs">
                        @foreach (json_decode($project->tags, true) as $tag)
                            <p class="info-left-taggs__tag">{{ $tag }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="info-left__bottom">
                    <a class="info-left__bottom--link" href="#">@lang('default.need_same_project')</a>
                    {{-- <a href="#" class="info-left__bottom--link">Как рассчитывалась цена для это проекта?</a> --}}
                </div>
            </div>
            <div class="info-right">
                <h2 class="info-right__title">{{ $project->title }}</h2>
                <p class="info-right__text">{{ $project->description }}</p>
            </div>
        </div>
    </div>
    <div class="case-wrapper">
        @foreach (json_decode($project->content, true) as $block)
            @isset($block['type'])
                @include('components.blocks.' . $block['type'], ['block' => $block])
            @endisset
        @endforeach
    </div>
</div>
