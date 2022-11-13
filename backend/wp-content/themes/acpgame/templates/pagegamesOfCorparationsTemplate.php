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
			<?php include(TEMPLATEPATH . "/components/_infoSlider_img-left/_infoSlider_img-left.php");?>
			<!--infoSlider-->
			<!--blockquote-->
			<!-- Тим-билдинги, клиентские мероприятия в нестандартном формате. -->
			<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
			<!--blockquote-->
		</div>
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-callback -->
	<!-- <h3 class="page__title-h3">Корпоративная игра</h3> -->
	<?php include(TEMPLATEPATH . "/components/_modal-callback/_modal-callback.php");?>
	<!-- modal-callback -->
</div>

<?php get_footer(''); ?>