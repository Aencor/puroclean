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
?>

<section id="<?= $blockID; ?>" data-block="template-block" class="<?= $blockBG ?>">
 
</section>