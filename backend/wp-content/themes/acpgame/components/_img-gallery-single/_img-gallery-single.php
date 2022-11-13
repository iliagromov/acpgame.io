<?php
/**
 * Фотоальбом наших игр
 */
$blockACF = get_field('_img-gallery-single');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<div class="page-items">
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
</div>

<?php endif; ?>


