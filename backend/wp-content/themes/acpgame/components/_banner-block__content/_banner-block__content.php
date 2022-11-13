<?php
/**
 * Битва корпораций баннер
 */
$blockACF = get_field('_banner-block__content');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="banner">
	<div class="wrapper">   
		<a class="page__on-main" href="../">На главную </a>
		<div class="banner-block">
			<div class="banner-block__content">
				<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Битва <br>  </span><span>корпораций</span></h1>
				<div class="banner-block__content-imgText">
					<div class="page__img"><img src="assets/img/img-battle-of-corporations-logo.png" alt=""></div>
					<p class="page__text page__text_arrow">Неформальная площадка для интеллектуального батла и общения между компаниями.</p>
				</div>
			</div>
			<div class="banner-block__img"><img src="assets/img/img-battle-of-corporations-1.png" alt="">
				<h4 class="page__title-h4">Сплоченность команды</h4>
				<p class="page__text">Укрепление эмоциональной связи между сотрудниками, командообразование.</p>
			</div>
		</div>
	</div>
</section>


<?php endif; ?>


