<?php
/*
	Template Name: Галерея
*/
get_header();?>
<div>
    <main class="page sample-page gallery-page info-page">
			<div class="wrapper"><a class="page__on-main page__on-main_yellow" href="../">На главную </a>
				<h1 class="page__title-h1 page__title-h1_text-shadow_white"><span>смотрите <br></span><span>как ЭМОЦИОНАЛЬНО</span></h1>
				<div class="page-nav">
					<button class="page__btn page__btn_gray-yellow is-active">Наши игры</button>
					<button class="page__btn page__btn_gray-yellow">Битва Корпораций</button>
				</div>
				<div class="page-nav">
					<button class="page__btn page__btn_gray-yellow">Москва</button>
					<button class="page__btn page__btn_gray-yellow">Санкт-Петербург</button>
					<button class="page__btn page__btn_gray-yellow">Екатеринбург</button>
					<button class="page__btn page__btn_gray-yellow">Алматы</button>
					<button class="page__btn page__btn_gray-yellow">Нур-Султан</button>
					<button class="page__btn page__btn_gray-yellow is-active">Ереван</button>
					<button class="page__btn page__btn_gray-yellow">Ташкент</button>
				</div>
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
			</div>
			<!--_next-section-->
				<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
			<!--_next-section-->
	</main>
</div>
<?php get_footer(''); ?>