<div class="ticker">
    <div class="swiper  " id="ticker-slider">
        <div class="swiper-wrapper">
            @foreach (explode('|', __('default.ticker_texts')) as $tickerItem)
                <div class="swiper-slide" style="text-align: right">
                    <p class="slide__content">{{ $tickerItem }}</p>
                </div>
            @endforeach
            @foreach (explode('|', __('default.ticker_texts')) as $tickerItem)
                <div class="swiper-slide" style="text-align: right">
                    <p class="slide__content">{{ $tickerItem }}</p>
                </div>
            @endforeach
            @foreach (explode('|', __('default.ticker_texts')) as $tickerItem)
                <div class="swiper-slide" style="text-align: right">
                    <p class="slide__content">{{ $tickerItem }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
