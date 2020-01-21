Line 2 [Inserted after line 1 in original show.php]

```
<div id="primary">
```

Lines 5-13 [Altering/Replacing lines 5-9 of original show.php]

```
<div id="item-images">
  <?php echo files_for_item(); ?>
</div>

<!-- Items metadata -->
<div id="item-metadata">
  <?php echo all_element_texts('item'); ?>
</div>
<!--
```

Lines 15-17 [Altering lines 11-17 of original show.php]

```
<div id="item-images">
  <?php echo files_for_item(); ?>
</div>-->
```

Lines 19-24 [Altering lines 19-25 of original show.php]

```
<?php if(metadata('item','Collection Name')); ?>
  <div id="collection" class="element">
    <h3><?php echo__('Collection'); ?></h3>
    <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
  </div>
<?php endif; ?>
```

Lines 26-32 [Altering lines 27-33 of original show.php]

```
<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item','has tags')); ?>
<div id="item-tags" class="element">
  <h3><?php echo __('Tags'); ?></h3>
  <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif; ?>
```

Lines 34-39 [Altering lines 35-41 of original show.php]

```
<!-- The following prints a citation for this item -->
<div id="item-citation" class="element'>
  <h3><?php echo__('Citation'); ?></h3>
  <div class="element-text"><?php echo metadata('item','citation',array('no-escape'=>true)); ?></div>
</div>
  <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
```

Lines 41-47 [Altering lines 43-48 of original show.php]

```

<ul class="item-pagination navigation">
  <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
  <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>

<div> <!-- End of Primary. -->

<?php echo foot(); ?>
```


