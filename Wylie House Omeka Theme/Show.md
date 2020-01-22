Lines 1-3: Inserted new code at line 2 of thanks, roy v. 2.1.1 show.php

```
<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass' =>'items show')); ?>
<div id="primary">
  <h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>
```

Lines 5-8: Inserted at line 5 of thanks, roy v. 2.1.1 show.php

```
<!-- Items metadata -->
<div id="item-metadata">
  <?php echo all_element_texts('item'); ?>
</div>
```

Between Lines 9 & 10: Deletion of lines 7-9 of thanks, roy v. 2.1.1 show.php

```
*Delete*
<!-- The following returns all of the files associated with an item. -->
<?php if (metadata('item', 'has files')); ?>
<div id="itemfiles" class="element">
*Delete*
```

Lines 11-13: Changes lines 11-17 of thanks, roy v. 2.1.1 show.php

```
<h3><?php echo__('Files'); ?></h3>
<div id="item-images'>
  <?php echo files_for_item(); ?>
</div>
```

Lines 15-20: Changes lines 19-25 of thanks, roy v. 2.1.1 show.php

```
<?php if(metadata('item', 'Collection Name')); ?>
  <div id="collection" class="element">
    <h3><?php echo__('Collection'); ?></h3>
    <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
  </div>
<? php endif; ?>
```

Lines 22-46 of Wylie House show.php are identical to lines 27-50 of thanks, roy v. 2.1.1 show.php BUT lines 22-46 are indented. 
