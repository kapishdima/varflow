<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>


<div class="ticker">
    <div class="swiper-container" id="js-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">UI/UX Дизайн</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Оптимизация</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>
            <div class="swiper-slide" style="text-align: center">
                <p class="slide__content">Разработка</p>
            </div>

        </div>
    </div>
</div>
<script>
    let swiper = new Swiper('#js-carousel', {
        slidesPerView: 10,
        spaceBetween: 65,
        speed: 5000,
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: true,
            waitForTransition: true,
        },
        breakpoints: {
            768: {
                spaceBetween: 65,
                slidesPerView: 2,
            }
        }
    });
</script>