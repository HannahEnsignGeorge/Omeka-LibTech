<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

<?php /*if (metadata( 'item','item_type_name') == 'Moving Image') {*/ ?>
<?php if (metadata( 'item', array('Avalon Video', 'Avalon Section PURL'))) { ?>
<?php fire_plugin_hook('public_avalon_video', array('view' => $this, 'item' => $item)); 
} else { ?>
<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); 
}; ?>
    <?php if (get_theme_option('Item FileGallery') == 0 && metadata('item', 'has files')): ?>
    <div class="element-text"><?php echo files_for_item(array('imageSize' => 'fullsize')); ?></div>
    <?php endif; ?>

<?php echo all_element_texts('item'); ?>

<!-- The following returns all of the files associated with an item. -->

<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
</div>
<?php endif; ?>

<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item. -->
<div id="item-citation" class="element">
    <h3><?php echo __('Citation'); ?></h3>
    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div>

<!-- Available output formats --> 

<nav>
<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>
</nav>

<?php echo foot(); ?>