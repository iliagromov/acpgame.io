<?php
/**
 * Слайдер Видео
 */
$blockACF = get_field('_sliderVideo');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<div class="page-items" id="sliderVideo">
    <div class="video-item">
        <div class="video-item-container">
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
        </div>
    </div>
    <div class="video-item">
        <div class="video-item-container">
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
        </div>
    </div>
</div>
<div class="slider sliderSmi page-nav">
    <div class="slider__actions">
        <button class="page__btn_prev" data-controls="prev"></button>
        <button class="page__btn_next" data-controls="next"></button>
    </div>
    <div class="page-nav">
        <div class="page-nav__number active">01</div>
        <div class="page-nav__number">02</div>
    </div>
</div>
<?php endif; ?>