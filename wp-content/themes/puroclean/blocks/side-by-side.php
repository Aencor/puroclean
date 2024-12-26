<?php
// Global Block
$id = $block["id"];
$customID = get_field('block_id');
$blockBG = get_field('block_background');
if($customID){
	$blockID = $customID;
} else { 
	$blockID = $id;
}
$layout = get_field('layout');
$blockTitle = get_field('block_title');
$blockContent = get_field('block_content');
$blockCTA = get_field('block_cta');
$blockImage = get_field('block_image');
$order = 'md:order-first';
if($layout == 'image-text'){ $order = 'md:order-last'; }
?>

<section id="<?= $blockID; ?>" data-block="template-block" class="<?= $blockBG ?> side-by-side-block py-20 px-6 sm:px-0">
 <div class="container xl mx-auto flex gap-20 flex-col md:flex-row md:items-center">
	<div class="text-content order-first basis-2/4 <?= $order ?>">
		<?= $blockTitle ? '<h2>' . $blockTitle . '</h2>' : null; ?>
		<?= $blockContent ? '<p class="lead">' . $blockContent . '</p>' : null; ?>
		<?= $blockCTA ? '<a class="mt-10 btn btn-tertiary btn-medium" href="'. $blockCTA['url'] .'" target="' . $blockCTA['target'] . '">' . $blockCTA['title'] . '</a>' : null; ?>
	</div>

	<div class="image-content flex justify-center basis-2/4">
		<img src="<?= $blockImage['url'] ?>" alt="<?= $blockImage['name']; ?>">
	</div>
 </div>
</section>