<?php
/**
 * О нас
 */
$blockACF = get_field('_about');
if (!empty($blockACF) && $blockACF["isShow"]) :

	$title = $blockACF['fields']['title'];
	$subtitle = $blockACF['fields']['subtitle'];
	$subtitle2 = $blockACF['fields']['subtitle2'];
	$experiencesACF = $blockACF['fields']['experiences'];

?>

<section class="about">
	<div class="wrapper">
		<div class="about-block">
			<div class="about-block-description">
				<h3 class="page__title-h3"><?php echo $title ?></h3>
				
				<p class="page__text"> <?php echo $subtitle ?> </p>
				<p class="page__text"> <?php echo $subtitle2 ?> </p>
				<button class="page__btn page__btn_gray">подробнее</button>
			</div>
			<div class="about-block-experience">

			<?php 
			if(!empty($experiencesACF)) :
			foreach($experiencesACF as $experience) : ?>
				<div class="about-block-experience__item">
					<span class="page__number"><?php echo $experience['number']; ?></span>
					<p class="page__text"> <?php echo $experience['meaning']; ?></p>
				</div>
			<?php endforeach; 
				endif;
			?>
				<!-- <div class="about-block-experience__item">
					<span class="page__number">7</span>
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
				</div> -->
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
