<!DOCTYPE html>
<html lang="ru"> 
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Gromov Ilia">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
		<base href="<?php echo get_template_directory_uri(); ?>/">
		<title>Acpgame</title>
		<link rel="stylesheet" href="libs/css/tiny-slider.css" type="text/css">
		<link rel="stylesheet" href="css/styles.css" type="text/css">
	</head>
	<body>
		<section class="bg">
			<div class="wrapper">
				<div class="bg-grid">
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
				</div>
			</div>
		</section>
		<header class="header">
			<div class="wrapper">
				<div class="header-block">
					<div class="header-block__logo"><a href="/"><img class="page_desktop" src="assets/img/logo-desktop.png"><img class="page_mobile" src="assets/img/logo-mobile.png"></a></div>
					<div class="header-block__links"><a class="page__link page_desktop" href="tel:+7 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page_desktop" href="tel:+7 (985) 774-32-40">8 (985) 774-32-40</a><a class="page__link page_mobile" href="tel:+7 (985) 774-32-40">
							<div class="page__icon page__icon_phone"></div></a></div>
					<div class="header-block__social">
						<button class="page__btn page__icon page__icon_facebook"></button>
						<button class="page__btn page__icon page__icon_instagram"></button>
					</div>
					<div class="header-block__menu">
						<button class="page__btn open-modal" data-modal="modal-menu"><span class="page__icon page__icon_menu"></span><span class="page_mobile page__text">Меню</span></button>
					</div>
					<div class="header-block_bg"></div>
				</div>
			</div>
		</header>
		<main class="page">
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
			<div class="banner-info">
				<div class="wrapper">
					<div class="banner-info-content">
						<h2 class="page__title-h2">Ближайшие игры</h2>
									<div class="page__text hide">
										<div class="page_yellow">25 Октября</div>
										<div class="city">Ереван</div>
										<div class="game-name">Угадать за 60 секунд</div>
									</div>
									<div class="page__text hide">
										<div class="page_yellow">28 Октября</div>
										<div class="city">Екатеринбург</div>
										<div class="game-name">Угадать за 60 секунд</div>
									</div>
									<div class="page__text hide">
										<div class="page_yellow">8 Декабря</div>
										<div class="city">Екатеринбург</div>
										<div class="game-name">Угадать за 60 секунд</div>
									</div>
									<div class="page__text hide">
										<div class="page_yellow">17 Декабря</div>
										<div class="city">Москва</div>
										<div class="game-name">Битва корпораций</div>
									</div>
									<div class="page__text hide">
										<div class="page_yellow">23 Декабря</div>
										<div class="city">Екатеринбург</div>
										<div class="game-name">Читай.Слушай.Смотри.</div>
									</div>
					</div>
					<div class="page__link-toggle page__text page_mobile">еще даты</div>
				</div>
			</div>
			<section class="about">
				<div class="wrapper">
					<div class="about-block">
						<div class="about-block-description">
							<h3 class="page__title-h3">о нас</h3>
							<p class="page__text">Мы за качество.  </p>
							<p class="page__text">Но количество не перестает удивлять даже нас.</p>
							<button class="page__btn page__btn_gray">подробнее</button>
						</div>
						<div class="about-block-experience">
							<div class="about-block-experience__item"><span class="page__number">7</span>
								<p class="page__text"> лет — приличный опыт</p>
							</div>
							<div class="about-block-experience__item"><span class="page__number">7</span>
								<p class="page__text">городов</p>
							</div>
							<div class="about-block-experience__item"><span class="page__number">500+</span>
								<p class="page__text">игр</p>
							</div>
							<div class="about-block-experience__item"><span class="page__number">200+</span>
								<p class="page__text">корпоративов</p>
							</div>
						</div>
					</div>
				</div>
			</section>
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
			<section class="video">
				<div class="wrapper">
					<div class="video-block">
						<div class="video-block-content">
							<h3 class="page__title-h3">Смотрите видео</h3>
							<p class="page__text">Сложно передать всю эмоциональную составляющую наших мероприятий, но нам это удалось.</p>
							<button class="page__btn page__btn_gray">Смотреть все видео</button>
						</div>
						<div class="video-block-img"><img class="page__video" src="assets/img/img-video.png"></div>
					</div>
				</div>
			</section>
			<section class="games">
				<div class="wrapper">
					<div class="games-block">
						<div class="games-block-img"><img class="page__img" src="assets/img/img-games.png"></div>
						<div class="games-block-content">
							<div class="games-block-content-format">
								<h3 class="page__title-h3">Формат игр</h3>
								<p class="page__text">Мы представляем пять видов  эксклюзивных игр, которые не оставят вас равнодушными.</p>
							</div>
							<div class="games-block-content-format-slider">
								<div class="btn-play page_hidden"></div>
								<div id="sliderGames">
									<div class="page__img"><img class="page__img" src="assets/img/img-games-1.png"></div>
									<div class="page__img"><img class="page__img" src="assets/img/img-games-2.png"></div>
									<div class="page__img"><img class="page__img" src="assets/img/img-games-3.png"></div>
									<div class="page__img"><img class="page__img" src="assets/img/img-games-4.png"></div>
								</div>
								<div class="slider-thumbnails" id="customizeThumbnailsGames">
									<div class="page__img_small"></div>
									<div class="page__img_small"></div>
									<div class="page__img_small"></div>
									<div class="page__img_small"></div>
								</div>
								<button class="page__btn page__btn_gray">Подробнее</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="kids">
				<div class="wrapper">
					<div class="kids-block">
						<div class="kids-block__content">
							<div class="page__img"><img src="assets/img/img-kids-1.png"></div>
							<h3 class="page__title-h3">Для детей</h3>
							<p class="page__text">Не знаете чем удивить детей сотрудников компании? <br> Какой формат выбрать для празднования <br> Дня Рождения своего ребенка? <br> Мы представляем эксклюзив.</p>
							<div class="page__btn">Подробнее</div>
						</div>
						<div class="kids-block__content-img"><img src="assets/img/img-kids-2.png"></div>
					</div>
				</div>
			</section>
			<section class="corporate-games">
				<div class="wrapper">
					<div class="corporate-games-block">
						<div class="corporate-games-block-img"><img class="page__img" src="assets/img/img-corporate-games.png"></div>
						<div class="corporate-games-block-content">
							<h3 class="page__title-h3">Корпоративные игры</h3>
							<p class="page__text">Тим-билдинги, клиентские мероприятия в нестандартном формате.</p>
							<div class="page__btn">Подробнее</div>
						</div>
					</div>
				</div>
			</section>
			<section class="battle-of-corporations">
				<div class="wrapper">
					<div class="battle-of-corporations-block">
						<div class="battle-of-corporations-block-content">
							<h3 class="page__title-h3">Битва корпораций</h3>
							<p class="page__text">Неформальная площадка для интеллектуального батла и общения между компаниями.</p>
							<div class="page__btn">Подробнее</div>
						</div>
						<div class="battle-of-corporations-block-img">
							<div class="page__img"><img src="assets/img/img-fight-corporates.png"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="tourslet">
				<div class="wrapper">
					<div class="tourslet-block">
						<div class="tourslet-block-img">
							<div class="page__img"><img src="assets/img/img-tour.png"></div>
						</div>
						<div class="tourslet-block-content">
							<h3 class="page__title-h3">Турслет</h3>
							<p class="page__text">Мы представляем наш спец.проект для любителей природы и душевных компаний.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="trust">
				<div class="wrapper">
					<div class="trust-block">
						<h3 class="page__title-h3">НАМ ДОВЕРЯЮТ</h3>
						<div class="trust-block__img">
							<div id="sliderTrust">
								<div class="page__img-container">
									<div class="page__img"><img src="assets/img/img-logo-sibur.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-qiwi.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-capital.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-domodel.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-alfa.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-post-office.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-leroymerlin.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-rt.png"></div>
								</div>
								<div class="page__img-container">
									<div class="page__img"><img src="assets/img/img-logo-sibur.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-qiwi.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-capital.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-domodel.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-alfa.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-post-office.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-leroymerlin.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-rt.png"></div>
								</div>
								<div class="page__img-container">
									<div class="page__img"><img src="assets/img/img-logo-sibur.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-qiwi.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-capital.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-domodel.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-alfa.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-post-office.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-leroymerlin.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-rt.png"></div>
								</div>
							</div>
							<div class="slider-thumbnails" id="customizeThumbnailsTrust">
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
							</div>
						</div>
					</div>
				</div>
			</section><a class="next-section-link" href="games-format/games-format.html">
							<section class="next-section">
								<div class="wrapper">
									<h2 class="page__title-h2">Следующий раздел</h2>
									<h3 class="page__title-h3">формат  игр</h3>
									<div class="page__btn">
										<div class="page__icon page__icon_arrow-long-black_next"></div>
									</div>
								</div>
							</section></a>
		</main>
		<footer class="footer">
			<div class="wrapper">
				<div class="footer-block">
					<div class="footer-block__col footer-block__img"><a href="/">
							<div class="page__img"><img class="page_desktop" src="assets/img/logo-small.png"><img class="page_mobile" src="assets/img/logo-big.png"></div></a></div>
					<div class="footer-block__col footer-block__about"><a class="page__link" href="#">О нас</a><a class="page__link" href="#">Команда</a><a class="page__link" href="#">Фотоотчеты</a><a class="page__link" href="#">Контакты</a><a class="page__link" href="#">СМИ о нас</a></div>
					<div class="footer-block__col footer-block__corporation"><a class="page__link" href="#">Корпоративные игры</a><a class="page__link" href="#">Битва корпораций</a></div>
					<div class="footer-block__col footer-block__games"><a class="page__link" href="#">Формат игр</a><a class="page__link" href="#">Угадать за 60 секунд</a><a class="page__link" href="#">Читай.Слушай.Смотри.</a><a class="page__link" href="#">Детские игры</a></div>
					<div class="footer-block__col footer-block__phones"><a class="page__link" href="#">8 (495) 941-83-25</a><a class="page__link" href="#">8 (985) 774-32-40</a></div>
					<div class="footer-block__col footer-block__soical"><a class="page__link" href="#">Facebook</a><a class="page__link" href="#">Instagram</a><a class="page__link" href="#">Video</a></div>
				</div>
				<div class="footer__copy">© ACP GAME, 2012-2020</div>
				<div class="author"> <span>разработано в </span>
					<div> <a class="page__link" href="https://iliagromov.github.io/">gromov.studio</a></div>
				</div>
			</div>
		</footer>
		<section class="modal modal-menu page_hidden" id="modal-menu">
			<div class="modal-container">
				<div class="modal__action">
					<button class="page__btn page__btn_close close-modal" data-modal="modal-menu"></button>
				</div>
				<div class="modal__content">
					<div class="modal__content-nav">
						<div class="page__img"><a href="../"><img src="assets/img/logo-big.png" alt=""></a></div>
						<nav class="page__nav"><a class="page__link" href="about/about.html">О нас</a><a class="page__link" href="team/team.html">Команда</a><a class="page__link" href="games-of-corparations/games-of-corparations.html">Корпоративные игры</a><a class="page__link" href="games-format/games-format.html">Формат игр</a>
							<ul class="page__lists">
								<li class="page__list"> <a class="page__link" href="games-format/games-format.html">Угадать за 60 секунд</a></li>
								<li class="page__list"> <a class="page__link" href="games-format/games-format.html">Читай.Слушай.Смотри.</a></li>
								<li class="page__list"> <a class="page__link" href="games-format/games-format.html">Детские игры</a></li>
							</ul><a class="page__link" href="battle-of-corporations/battle-of-corporations.html">Битва корпораций</a><a class="page__link" href="gallery-page/gallery-page.html">Фотоотчеты</a><a class="page__link" href="video-page/video-page.html">Видео</a><a class="page__link" href="smi/smi.html">СМИ о нас</a><a class="page__link" href="contacts/contacts.html">Контакты</a>
						</nav>
						<div class="page__links"><a class="page__link" href="tel:+7 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link" href="tel:+7 (985) 774-32-40">8 (985) 774-32-40</a></div>
						<div class="social">
							<button class="page__btn page__icon page__icon_facebook_white"></button>
							<button class="page__btn page__icon page__icon_instagram_white"></button>
						</div>
					</div>
					<div class="modal__content-info">
						<div class="page__img"><img src="assets/img/img-modalmenu-1.png" alt=""></div>
						<div class="page__img"><img src="assets/img/img-modalmenu-2.png" alt=""></div>
						<div class="page__img"><img src="assets/img/img-modalmenu-3.png" alt=""></div>
						<div class="page__img"><img src="assets/img/img-modalmenu-4.png" alt=""></div>
					</div>
				</div>
			</div>
		</section>
		<script src="libs/js/tiny-slider.js"></script>
		<script src="js/debug-grid-create.js"></script>
		<script src="js/modal.js"></script>
		<script src="js/store-scroll.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>