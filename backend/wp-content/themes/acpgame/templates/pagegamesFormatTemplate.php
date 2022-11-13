<?php
/*
	Template Name: Формат игр
*/
get_header();?>
<div>
    <main class="page sample-page games-format">
			<div class="wrapper">   <a class="page__on-main" href="../">На главную </a>
				<section class="games-format-title">
					<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Формат <br>  </span><span>Наших игр</span></h1>
				</section>
				<!-- games-format-items -->
				<?php include(TEMPLATEPATH . "/components/_games-format-items/_games-format-items.php");?>
				<!-- games-format-items -->
				<!-- _blockquote -->
				<!--Мы приглашаем к участию  новых интересных людей из мира бизнеса-->
				<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
				<!-- blockquote -->
			</div>
			<!--_next-section-->
			<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
			<!--_next-section-->
	</main>
</div>
<?php get_footer(''); ?>