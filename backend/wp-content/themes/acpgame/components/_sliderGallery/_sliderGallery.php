<?php
/**
 * Слайдер галереи
 */
$blockACF = get_field('_sliderGallery');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<div class="page-content">
    <div class="page-items" id="sliderGallery">
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-1.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-2.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-2.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-1.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-2.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
        <div class="page-item">
            <div class="page__img"><img src="assets/img/img-gallery-2.png" alt="">
                <div class="nav"><a class="page__link" href="https://iliagromov.github.io/acpgame.github.io/build/gallery/gallery.html">Смотреть фотоальбом</a>
                    <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
                </div>
            </div>
            <div class="page__text date">15 ОКТ 2020</div>
            <div class="page__text value">Угадать за 60 секунд</div>
            <div class="page-item_bg"></div>
        </div>
    </div>
    <div class="slider page-nav">
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


