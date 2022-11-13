<?php
/**
 * Цитата
 */
$blockACF = get_field('_blockquote');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<section class="blockquote">
    <!--Мы приглашаем к участию  новых интересных людей из мира бизнеса-->
    <p class="page__text">Мы приглашаем к участию  новых интересных людей из мира бизнеса.</p>
</section>

<?php endif; ?>


