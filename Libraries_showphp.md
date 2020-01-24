## Wylie House Theme + IU Archives Theme Show.php (Thanks, Roy v. 2.1.1 in Omeka 2.5) ##

Lines 1-4 shared by both sheets

```
<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass'=> 'items show')); ?>
<div id="primary">
  <h1><?php echo metadata('item', array('Dublin Core', 'Title")); ?></h1>

```

IU Archives Adds Lines 5-8, inserted after line 4 in Wylie House

```
  <div id="item-images">
    <?php echo files_for_item(); ?>
  </div>
  
  ```
  
  At Wylie House line 5 and IU Archives line 9 the two show.php come back together.
  
  ```
    <!-- Items metadata -->
    <div id="item-metadata">
      <?php echo all_element_texts('item'); ?>
    </div>
  ```
  
  IU Archives Adds Line 13, inserted at line 9 of Wylie House.
  
  ```
  <!--
  ```
  
  At Wylie House line 10 and IU Archives line 14 the two show.php come back together.
  
  ```
    <h3><?php echo__('Files'); ?></h3>
    <div id="item-images">
      <?php echo files_for_item(); ?>
    </div>
  ```
  
  IU Archives alters line 17 (line 13 of Wylie House).
  
  ```
    </div>-->
  ```
  
  At Wylie House line 15 and IU Archives line 19 the two show.php come back together, without further differences.
  
  ```
    <?php if(metadata('item', 'Collection Name')); ?>
      <div id="Collection" class="element">
        <h3><?php echo__('Collection'); ?></h3>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
    <?php endif; ?>
    
      <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')); ?>
    <div id="item-tags" class="element">
      <h3><?php echo__('Tags'); ?></h3>
      <div class="element-text"><?php echo metadata('item', 'citation', array('no-escape'=>true)); ?></div>
    </div>
      <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
      
    <ul class="item-pagination navigation">
      <li id="previous-item" class="previous"><?php echo link_to_next_item_show(); ?></li>
      <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>
    
 </div> <!-- End of Primary. -->
 
  <?php echo foot(); ?>
 ```
 


