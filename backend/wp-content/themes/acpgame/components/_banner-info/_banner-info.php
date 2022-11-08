<?php
$bannerInfoACF = get_field('_banner-info');
if (!empty($bannerInfoACF) && $bannerInfoACF["isShow"]) :
?>

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

<?php endif; ?>


