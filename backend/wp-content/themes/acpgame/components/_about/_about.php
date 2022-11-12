<?php
$blockACF = get_field('_about');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

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

<?php endif; ?>
