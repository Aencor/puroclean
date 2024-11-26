<?php
// Global Block
$id = $block["id"];
$customID = get_field('block_id');
if($customID){
	$blockID = $customID;
} else { 
	$blockID = $id;
}

$blockTitle = get_field('block_title');
$blockContent = get_field('block_content');
$blockCTA = get_field('block_cta');
$blockImage = get_field('block_image');
$blockBGImage = get_field('block_background_image');
$addMask = get_field('add_circle_mask');
?>

<section id="<?= $blockID; ?>" data-block="template-block" class="base-block hero-block py-40 md:py-52 bg-cover px-6 sm:px-0" <?= $blockBGImage ? 'style="background-image:url(' . $blockBGImage['url'] . ');"' : null ?>>
 <div class="container mx-auto xl">
  <?= $addMask ? '<div class="circle-mask"></div>' : null ?>
  <div class="hero-text w-full sm:w-1/2">
    <?= $blockTitle ? '<h1 class="hero-title">' . $blockTitle . '</h1>' : null ?>
    <?= $blockContent ? '<div class="h-content lead">' . $blockContent . '</div>' : null; ?>
    <?= $blockCTA ? '<a href="' . $blockCTA['url'] . '" class="mt-10 hero-cta btn btn-tertiary btn-large">' . $blockCTA['title'] . '</a>' : null; ?>
  </div>

  <?= $blockImage ? '<img src="' . $blockImage['url'] . '" alt="' . $blockImage['name'] . '" class="max-w-md hero-image hidden lg:block absolute">' : null; ?>
 </div>
</section>