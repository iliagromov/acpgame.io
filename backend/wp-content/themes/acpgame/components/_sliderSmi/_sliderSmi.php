<?php
/**
 * Слайдер СМИ
 */
$blockACF = get_field('_sliderSmi');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>
<div class="wrapper">
    <div class="page-items" id="sliderSmi">
        <div class="smi-block-container">
            <div class="smi-block-container-item">
                <div class="smi-block-container__video">
                    <video class="page__img" poster="assets/img/img-video-page.png" src=""></video>
                    <div class="smi-block-container__video-description">
                        <p class="page__text page__text_yellow date">23 ДЕК 2019</p>
                        <p class="page__text page__text_white name">Видео репортаж на телеканале Россия 24</p>
                    </div>
                </div>
                <div class="smi-block-container__article"><img class="page__img" src="assets/img/img-smi-article.png">
                    <p class="page__text">5 НОЯ 2018</p>
                    <p class="page__text">Статья в журнале РБК</p>
                </div>
            </div>
        </div>
        <div class="smi-block-container">
            <div class="smi-block-container-item">
                <div class="smi-block-container__video">
                    <video class="page__img" poster="assets/img/img-video-page.png" src=""></video>
                    <div class="smi-block-container__video-description">
                        <p class="page__text page__text_yellow date">23 ДЕК 2019</p>
                        <p class="page__text page__text_white name">Видео репортаж на телеканале Россия 24</p>
                    </div>
                </div>
                <div class="smi-block-container__article"><img class="page__img" src="assets/img/img-smi-article.png">
                    <p class="page__text">5 НОЯ 2018</p>
                    <p class="page__text">Статья в журнале РБК</p>
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
</div>

<?php endif; ?>


