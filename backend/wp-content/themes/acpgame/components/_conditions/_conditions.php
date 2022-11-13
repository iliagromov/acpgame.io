<?php
/**
 * Условия
 */
$blockACF = get_field('_conditions');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="conditions">
    <div class="wrapper">
        <h3 class="page__title-h3">Условия участия</h3>
        <div class="block-infoSlider">
            <div class="block-infoSlider__info block-infoSlider__left">
                <div class="block-infoSlider__item"><span class="page__number">6</span>
                    <p class="page__text">человек в команде</p>
                </div>
                <div class="block-infoSlider__item"><span class="page__number">9000</span>
                    <p class="page__text">рублей с команды</p>
                </div>
                <button class="page__btn page__btn_yellow open-modal" data-modal="modal-callback">принять участие</button>
            </div>
            <div class="block-infoSlider__slider block-infoSlider__rigth">
                <div class="btn-play page_hidden"></div>
                <div id="sliderInfoSlider">
                    <div class="page__img"><img src="assets/img/img-battle-of-corporations-7.png" alt=""></div>
                    <div class="page__img"><img src="assets/img/img-battle-of-corporations-7.png" alt=""></div>
                    <div class="page__img"><img src="assets/img/img-battle-of-corporations-7.png" alt=""></div>
                    <div class="page__img"><img src="assets/img/img-battle-of-corporations-7.png" alt=""></div>
                </div>
                <div class="slider-thumbnails" id="customizeThumbnailsInfoSlider">
                    <div class="page__img_small"></div>
                    <div class="page__img_small"></div>
                    <div class="page__img_small"></div>
                    <div class="page__img_small">  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


