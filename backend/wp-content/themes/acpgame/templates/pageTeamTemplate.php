<?php
/*
	Template Name: Команда
*/
get_header();?>
<div>
	<main class="page sample-page team">
		<div class="wrapper"><a class="page__on-main" href="../">На главную </a>
			<div class="team-block">
				<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>наша <br></span><span>Команда</span></h1>
				<div class="team-block__description">
					<p class="page__text">Вся команда ACP GAME ежедневно проводит масштабную работу для того, чтобы собрать единомышленников и увлечь качественным досугом с уникальным сценарием.</p>
				</div>
				<!--team-block-items-->
				<?php include(TEMPLATEPATH . "/components/_team-block-items/_team-block-items.php");?>
				<!--team-block-items-->
			</div>
		</div>
		<!-- blockquote -->
		<!-- Тим-билдинги, клиентские мероприятия в нестандартном формате. -->
		<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
		<!-- blockquote -->		
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-team -->
	<?php include(TEMPLATEPATH . "/components/_modal-team/_modal-team.php");?>
	<!-- modal-team -->
</div>	
<?php get_footer(''); ?>