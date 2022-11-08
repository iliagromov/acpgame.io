<?php
/*
	Template Name: Страница с видео
*/
get_header();?>
<main class="page sample-page video-page">
			<div class="wrapper"><a class="page__on-main page__on-main_yellow" href="../">На главную </a>
				<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>видео <br></span><span>наших игр</span></h1>
				<div class="page-nav">
					<div class="page-btn">
						<button class="page__btn page__btn_gray-yellow">Все видео</button>
					</div>
					<div class="page-btn">
						<button class="page__btn page__btn_gray-yellow">Интервью</button>
					</div>
					<div class="page-btn">
						<button class="page__btn page__btn_gray-yellow">Промо-ролики</button>
					</div>
					<div class="page-btn">
						<button class="page__btn page__btn_gray-yellow">Турслет</button>
					</div>
				</div>
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
			</div><a class="next-section-link" href="../smi/smi.html">
							<section class="next-section">
								<div class="wrapper">
									<h2 class="page__title-h2">Следующий раздел</h2>
									<h3 class="page__title-h3">сми о нас</h3>
									<div class="page__btn">
										<div class="page__icon page__icon_arrow-long-black_next"></div>
									</div>
								</div>
							</section></a>
		</main>
<?php get_footer(''); ?>