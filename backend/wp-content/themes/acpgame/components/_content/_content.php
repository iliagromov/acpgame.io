<?php
/**
 * Контент
 */
$blockACF = get_field('_content');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="content">
	<div class="wrapper">
		<h3 class="page__title-h3">Какие задачи решает «Битва Корпораций»</h3>
		<div class="content-items">
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="assets/img/img-battle-of-corporations-2.png" alt=""></div>
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4">HR-Брендинг</h4>
					<p class="page__text">Укрепление имиджа компании, которая заботится о корпоративной культуре своих сотрудников.</p>
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="assets/img/img-battle-of-corporations-3.png" alt=""></div>
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4">Оптимизация бюджета</h4>
					<p class="page__text">Стоимость участия в проекте существенно ниже бюджета отдельного корпоративного мероприятия</p>
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="assets/img/img-battle-of-corporations-4.png" alt=""></div>
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4">Система премирования</h4>
					<p class="page__text">Поощрение особо отличившихся сотрудников участием в проекте, с возможностью вести внутренний счет баллов и дополнительным вознаграждением команды-победителя в общем зачете компании.</p>
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="assets/img/img-battle-of-corporations-5.png" alt=""></div>
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4">Новые бизнес-возможности</h4>
					<p class="page__text">Новые возможности для развития бизнеса через укрепление связей с коллегами из других компаний и отраслей.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


