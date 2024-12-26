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
$blockTitle = get_field('block_title');
$logos = get_field('logos');
$blockCTA = get_field('block_cta');

?>

<section id="<?= $blockID; ?>" data-block="template-block" class="<?= $blockBG ?> py-20 logo-grid-block px-4 sm:px-0">
	<div class="container xl mx-auto">
		<h3 class="text-center grid-title"><?= $blockTitle ?></h3>

		<div class="grid mt-20 grid-cols-2 md:grid-cols-4 gap-5 md:gap-20">
			<?php 
				foreach($logos as $logo) : 
					$logoImage = $logo['logo'];
					$link = $logo['link_and_label'];
			?>
				<a href="<?= $link['url'] ?>" class="grid-item shadow hover:shadow-lg rounded-lg" target="<?= $link['target'] ?>">
					<img src="<?= $logoImage['url'] ?>" class="w-full object-cover" alt="<?= $logoImage['title'] ?>">
				</a>
			<?php endforeach; ?>
		</div>

		<div class="bottom-cta grid-cta mt-20 flex items-center justify-center">
			<a href="<?= $blockCTA['url'] ?>" class="btn btn-large btn-tertiary"><?= $blockCTA['title'] ?></a>
		</div>
	</div>
</section>