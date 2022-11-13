<?php
/**
 * Подробнее о команде
 */
$blockACF = get_field('_modal-team');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="modal modal-team page_hidden" id="modal-team">
	<div class="modal-container">
		<div class="modal__action">
			<button class="page__btn page__btn_close close-modal" data-modal="modal-team"></button>
		</div>
		<div class="modal__content">
			<div class="modal__content-img">
				<div class="page__img"><img src="assets/img/img-team-1.png" alt=""></div>
			</div>
			<div class="modal__content-text">
				<h2 class="page__title-h2">Юлиана Константинова</h2>
				<div class="page__text position">Основатель проекта</div>
				<p class="page__text description">Я люблю людей и мне очень приятно, что благодаря своей деятельности, располагая широким кругом связей в различных отраслях, я могу собирать ключевых менеджеров, давать им возможность познакомиться друг с другом в неформальной обстановке. Игра придает любому мероприятию атмосферу реальной борьбы. Интрига заключается в том, что являясь сильным игроком на профильном рынке, можно оказаться «побежденным» за игровым столом и наоборот. Надеюсь, что любителей интеллектуальных игр с каждым последующим мероприятием будет гораздо больше!</p>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


