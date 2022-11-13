<?php
/**
 * Эмоции
 */
$blockACF = get_field('_emotions');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="emotions">
	<div class="wrapper">
		<div class="emotions-block">
			<div class="emotions-block-content">
				<div class="emotions-block-content__text">
					<h3 class="page__title-h3">Свежие эмоции</h3>
					<p class="page__text">Мы стараемся фотоотчетами передать атмосферу наших мероприятий. Удается нам это или нет, вы сможете решить сами.</p>
				</div>
				<button class="page__btn page__btn_yellow">Смотреть все фото</button>
			</div>
			<div class="emotions-block-img">
				<div class="emotions-block-img__big">
					<div id="emotionsBanner">
						<div class="page__img"><img src="assets/img/img-emotions-big.png"></div>
						<div class="page__img"><img src="assets/img/img-emotions-2.jpg"></div>
						<div class="page__img"><img src="assets/img/img-emotions-3.jpg"></div>
					</div>
				</div>
				<div class="emotions-block-img__preview">
					<div class="slider-thumbnails" id="customizeThumbnailsEmotions">
						<div class="page__img_small"><img src="assets/img/img-emotions-big.png"></div>
						<div class="page__img_small"><img src="assets/img/img-emotions-2.jpg"></div>
						<div class="page__img_small"><img src="assets/img/img-emotions-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>