<?php
/**
 * Страница блока о нас
 */
$blockACF = get_field('_page-block');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<div class="page-block">
    <div class="block-infoSlider">
        <div class="block-infoSlider__slider block-infoSlider__left">
            <div class="btn-play page_hidden"></div>
            <div id="sliderInfoSlider">
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
            </div>
            <div class="slider-thumbnails" id="customizeThumbnailsInfoSlider">
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
            </div>
        </div>
        <div class="block-infoSlider__info block-infoSlider__rigth">
            <div class="block-infoSlider__item"><span class="page__number">7</span>
                <p class="page__text">лет — приличный опыт</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">5</span>
                <p class="page__text">стран</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">500+</span>
                <p class="page__text">игр</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">200+</span>
                <p class="page__text">корпоративов</p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


