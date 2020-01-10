<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

<?php if (metadata('item',array('Item Type Metadata','Avalon Section PURL'))): ?>
	<div id="vid_player" style="width:100%; margin:0 auto;">
	<!--	<iframe src=/*<?php echo html_escape(metadata("item",array("Item Type Metadata","Avalon Section PURL")))?>*/?urlappend=embed width=600 height=450 frameborder=0 webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
	<?php fire_plugin_hook('public_avalon_video',array('view' => $this, 'item' => $item )); ?> 
	</div>
	<?php echo all_element_texts('item'); ?>
	<!-- The following returns all of the files associated with an item. -->
	<?php if (metadata('item', 'has files')): ?>
	<div id="itemfiles" class="element">
	    <h3 style="margin-bottom:5px;"><?php echo __('Files'); ?></h3>
	    <?php if (get_theme_option('Item FileGallery') == 1): ?>
	    <div class="element-text"><?php echo item_image_gallery(); ?></div>
	    <?php else: ?>
	    <div class="element-text"><?php echo files_for_item(); ?></div>
	    <?php endif; ?>
	</div>
	<?php endif; ?>
	
	<?php else: ?>
	
	<!-- The following returns all of the files associated with an item. -->
	<?php if (metadata('item', 'has files')): ?>
	<div id="itemfiles" class="element">
	    <h3 style="margin-bottom:5px;"><?php echo __('Files'); ?></h3>
	    <?php if (get_theme_option('Item FileGallery') == 1): ?>
	    <div class="element-text"><?php echo item_image_gallery(); ?></div>
	    <?php else: ?>
	    <div class="element-text"><?php echo files_for_item(); ?></div>
	    <?php endif; ?>
	</div>
	<?php echo all_element_texts('item'); ?>
	<?php endif; ?>
<?php endif; ?>
	

<!-- If the item belongs to a collection, the following creates a link to that collection.
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
</div>
<?php endif; ?>
-->
<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item.
<div id="item-citation" class="element">
    <h3><?php echo __('Citation'); ?></h3>
    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div>
-->
<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<nav>
<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>
</nav>

<?php echo foot(); ?>
