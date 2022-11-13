<?php
/*
	Template Name: О нас
*/
get_header();?>
<div>
    <main class="page sample-page about-page info-page">
		<div class="wrapper">
			<a class="page__on-main" href="../">На главную </a>
			<div class="page-block">
				<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>немного <br>  </span><span>О нас</span></h1>
				<div class="page-block__description">
					<p class="page__text">ACP GAME — это не просто игры с вопросами и ответами, это прежде всего, комьюнити с общими интересами, желающее проводить свой досуг с пользой. Это объединение успешных людей, которые знают цену своему времени и ценят качество его организации. Все гости к нам приходят по рекомендациям. Мы уделяем большое внимание рассадке, учитывая пол, возраст и семейный статус.</p>
					<p class="page__text page__text_bottom">Комфорт, интересные знакомства и атмосфера — вот, что нас отличает от других. Мероприятия проходят в закрытом формате в лучших ресторанах Москвы.</p>
				</div>
			</div>
			<?php include(TEMPLATEPATH . "/components/_sliderSmi/_sliderSmi.php");?>
			<!---page-block-->
			<?php include(TEMPLATEPATH . "/components/_page-block/_page-block.php");?>
			<!---page-block-->
			<!--blockquote-->
			<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
			<!--blockquote-->
		</div>
		<!--TODO: include next-section-l-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>	
	</main>
</div>
<?php get_footer(''); ?>