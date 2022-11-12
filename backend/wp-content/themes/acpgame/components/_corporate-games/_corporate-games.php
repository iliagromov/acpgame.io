<?php
$blockACF = get_field('_corporate-games');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

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


<?php endif; ?>
