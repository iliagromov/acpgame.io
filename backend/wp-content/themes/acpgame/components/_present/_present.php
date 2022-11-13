<?php
/**
 * Подарок
 */
$blockACF = get_field('_present');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="present">
    <div class="wrapper">
        <div class="present-block">
            <div class="present-block__img"><img src="assets/img/img-battle-of-corporations-6.png" alt=""></div>
            <div class="present-block__content">
                <h3 class="page__title-h3">главный приз</h3>
                <p class="page__text">Банка красной икры — традиционный приз за первое место</p>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


