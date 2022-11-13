
<?php
/**
 * Баннер
 */
$blockACF = get_field('_banner');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>
<section class="banner">
	<div class="wrapper">
		<div class="banner-block">
			<div class="banner-block-content">
				<div class="banner-block-content__description">
					<p class="page__text">Интеллектуальные <br> игры для бизнес-аудитории с&nbsp;уникальным сценарием</p>
				</div>
				<div class="banner-block-content__slogan">
					<h1 class="page__title-h1 page__title-h1_text-shadow_white"><span>Я играю <br></span><span>икру </span><span>забираю</span></h1>
					<button class="page__btn page__btn_yellow">принять участие</button>
				</div>
				<div class="banner-block-content__description">
					<p class="page__text page__text_arrow">Мы&nbsp;приглашаем к&nbsp;участию новых людей из&nbsp;мира бизнеса</p>
				</div>
			</div>
			<div class="banner-block-img">
				<div class="banner-block-img__big">
					<div class="banner-block-img__big_bg"></div>
					<div class="btn-play page_hidden"></div>
					<div id="sliderBanner">
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-1.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-2.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-3.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-4.png"></div>
					</div>
				</div>
				<div class="banner-block-img__preview">
					<div class="slider-thumbnails" id="customizeThumbnails">
						<div class="page__img_small"><img src="assets/img/img-banner-1.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-1.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-2.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-3.png"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>