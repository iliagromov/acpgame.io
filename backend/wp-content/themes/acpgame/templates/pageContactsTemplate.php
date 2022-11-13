<?php
/*
	Template Name: Контакты
*/
get_header();?>
<div>
	<main class="page sample-page contacts">
		<div class="wrapper">
			<a class="page__on-main" href="../">На главную </a>
			<h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>наши <br></span><span>контакты</span></h1>
			<!--_contacts-block-->
			<?php include(TEMPLATEPATH . "/components/_contacts-block/_contacts-block.php");?>
			<!--_contacts-block-->
			</div>
		</div>
	</main>
</div>
<?php get_footer(''); ?>