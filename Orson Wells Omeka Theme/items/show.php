
<!-- Output the site title. -->
<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<?php $programs = array('First Person Singular', 'Mercury Theatre on the Air', 'Campbell Playhouse', 'Orson Welles Show', 'Ceiling Unlimited', 'Hello Americans', 'Orson Welles Almanac', 'This Is My Best', 'Orson Welles Commentaries', 'Mercury Summer Theatre', 'More');
?>

<div id="primary">
<div class="section">
<div class="row">
<div class="grid"><!-- use show-for-medium only if the one-quarter is empty. This prevents empty space on small viewports -->
<div class="grid-item one-quarter show-for-medium">

<?php if (true): 
	$collection_name = str_replace(' ', '_', strtolower(metadata('item', 'Collection Name'))) ;
	?>
<div class="collection_image">
	<img src="<?php echo img($collection_name . '.jpg', 'images/collection_images'); ?>" />
</div>	
<?php endif; ?>

<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <div class="element-text"><h4><?php echo link_to_collection_for_item($text='Browse Episodes'); ?></h4></div>
</div>
<?php endif; ?>

<h4>
	<a href="about">About</a>
</h4>

	
<!-- Output the page title. -->
<!-- .prose one-quarter--></div>
<div class="grid-item three-quarters">
<?php $final_title="";?>
<?php $titles=metadata('item',array('Dublin Core','Title'),array('all'=>true));?>
<?php if ($titles):?>
<?php foreach ($titles as $title){
	$final_title=$final_title." ".$title;?>
<?php };?>
	
<?php endif; ?>

<?php echo $final_title;?>

<!-- Output the Shortcode Video plugin -->
<?php if (metadata('item', array('Streaming Video', 'HTTP Streaming Directory'))):
	fire_plugin_hook('video_items_show', array('view' => $this, 'item' => $item)); ?>
<?php endif; ?>

<!-- Output the iiif viewer with the loaded files. -->
<?php if (metadata('item', 'has files')): 
		fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
<?php endif;?>
<!-- .grid-item --></div>

<!-- .grid --></div>
<!-- .row --></div>
<!-- .section --></div>
<!-- #primary --></div>

<?php echo foot(); ?>
<?php //endif; ?>
