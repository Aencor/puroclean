<?php
// Global Block
$id = $block["id"];
$customID = get_field('block_id');
if($customID){
	$blockID = $customID;
} else { 
	$blockID = $id;
}
$ctaText = get_field('cta_text');
$cta = get_field('cta');
$stacked = get_field('stacked');

$layout = 'flex-col md:flex-row text-center md:text-left justify-center md:justify-between items-center gap-5 md:gap-20';

if($stacked){
	$layout = 'flex-col text-center justify-center items-center gap-5';
}
?>

<section id="<?= $blockID; ?>" data-block="template-block" class="dark-bg cta-label-block py-5 px-4 sm:px-8">
	<div class="container xl mx-auto flex <?= $layout ?> max-w-6xl">
		<div class="cta-text lead">
			<h5><?= $ctaText ?></h5>
		</div>

		<a href="<?= $cta['url'] ?>" target="<?= $cta['target'] ?>" class="btn btn-large btn-tertiary"><?= $cta['title'] ?></a>
	</div>
</section>