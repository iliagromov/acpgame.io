<?php
/*
	Template Name: Галерея архив(каталог)
*/
get_header();?>
<div>
    <main class="page sample-page gallery-page info-page">
			<div class="wrapper">
				<a class="page__on-main page__on-main_yellow" href="../">На главную </a>
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
				<!-- sliderGallery -->
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
				<!-- sliderGallery -->
			</div>
			<!--_next-section-->
				<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
			<!--_next-section-->
	</main>
	<!--_modal-gallery-->
	<section class="modal modal-gallery page_hidden" id="modal-gallery">
			<div class="modal-container">
				<div class="modal__action">
					<button class="page__btn page__btn_close close-modal" data-modal="modal-gallery"></button>
				</div>
				<div class="modal__content">
					<div class="modal__content-text">
						<h2 class="page__title-h2">ЕРЕВАН</h2>
						<div class="page__text date">25 ОКТ 2020</div>
						<div class="page__text">Угадать за 60 секунд</div>
					</div>
					<div class="modal__content-img">
						<div class="slider__actions">
							<button class="page__btn_prev" data-controls="prev"></button>
							<button class="page__btn_next" data-controls="next"></button>
						</div>
						<div class="modal__content-img-big">
							<div class="btn-play page_hidden"></div>
							<div id="sliderModalGallery">
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
										<div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
							</div>
						</div>
					</div>
					<div class="modal__content-img-preview">
						<div class="slider-thumbnails" id="customizeThumbnailsModalGallery">
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
									<div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--_modal-gallery-->
</div>
<?php get_footer(''); ?>