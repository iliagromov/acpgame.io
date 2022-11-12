<?php
/*
	Template Name: Корпоративные игры
*/
get_header();?>
<div>
<main class="page sample-page games-of-corparations info-page">
			<div class="wrapper"><a class="page__on-main" href="../">На главную </a>
				<div class="page-block">
					<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Корпоративные <br>  </span><span>Игры</span></h1>
					<div class="page-block__description">
						<p class="page__text">Досуг успешных людей должен быть достойным, особенно, если это корпоративный досуг. Задавая планку времяпрепровождению своих сотрудников или клиентов, вы задаете планку развитию бизнеса, становления коллектива и партнёрских отношений.</p>
						<p class="page__text page__text_bottom">Уникальный сценарий, полный азарта, эмоций и здоровой конкуренции, поможет наладить контакт между гостями вечера и надолго запомнится всем собравшимся. Игры могут быть разной механики, адаптированы под любое количество гостей и тематику мероприятия, а сама концепция вечера выстроена под любые задачи.</p>
					</div>
				</div>
				<!--infoSlider_img-left-->
				<div class="page-block">
					<div class="block-infoSlider">
						<div class="block-infoSlider__slider block-infoSlider__left">
							<div class="btn-play page_hidden"></div>
							<div id="sliderInfoSlider">
								<div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
								<div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
								<div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
								<div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
							</div>
							<div class="slider-thumbnails" id="customizeThumbnailsInfoSlider">
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
							</div>
						</div>
						<div class="block-infoSlider__info block-infoSlider__rigth">
							<h3 class="page__title-h3">В прямом эфире</h3>
							<p class="page__text">В сложившейся ситуации в мире, мы с удовольствием организуем онлайн игру, в не менее увлекательном формате.</p>
							<button class="page__btn open-modal" data-modal="modal-callback">Принять участие </button>
						</div>
					</div>
				</div>
				<!--infoSlider-->
				<!--blockquote-->
					<section class="blockquote">
						<p class="page__text">Тим-билдинги, клиентские мероприятия в нестандартном формате.</p>
					</section>
				<!--blockquote-->
			</div><a class="next-section-link" href="../battle-of-corporations/battle-of-corporations.html">
							<section class="next-section">
								<div class="wrapper">
									<h2 class="page__title-h2">Следующий раздел</h2>
									<h3 class="page__title-h3">Битва корпораций</h3>
									<div class="page__btn">
										<div class="page__icon page__icon_arrow-long-black_next"></div>
									</div>
								</div>
							</section></a>
		</main>
		<!-- modal-callback -->
				<section class="modal modal-callback page_hidden" id="modal-callback">
					<div class="modal-container">
						<div class="modal__action">
							<button class="page__btn page__btn_close close-modal" data-modal="modal-callback"></button>
						</div>
						<div class="modal__content">
							<div class="modal__content-block">
								<div class="modal__content-text">
									<!-- <h3 class="page__title-h3">Корпоративная игра</h3> -->
									<h3 class="page__title-h3">Корпоративная игра</h3>
									<p class="page__text">Желаете заказать игру для сотрудников или их детей, мы с удовольствием организуем для вас интеллектуальное мероприятие с уникальным сценарием.</p>
								</div>
								<form class="page-form">
									<label class="page-label page-input_user">
										<input class="page-input" type="text" required placeholder="Имя">
									</label>
									<label class="page-label page-input_phone">
										<input class="page-input" type="phone" required placeholder="Телефон">
									</label>
									<div class="page-label checkbox">
										<input class="page-input-checkbox" id="checkbox" type="checkbox" required>
										<label class="page-label" for="checkbox">Согласен на обработку персональных данных</label>
									</div>
									<button class="page__btn page__btn_gray">Отправить заявку</button>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- modal-callback -->
</div>


<?php get_footer(''); ?>