Line 2

```
<div id="primary">
```

Lines 4-6

```
  <?php fire_plugin_hook('public_avalon_video', array('view' =>$this, 'item' => $item)); ?>
  <!-- Items metadata -->
  <div id="item-metadata">
```

Line 8

```
</div>
```

[Lines 7-9 of Original show.php deleted]

Lines 11-13 [Altering Lines 11-17 of Original show.php]

```
<div id="item images">
  <?php echo files_for_item(); ?>
</div>
```

Lines 15-20 [Altering Lines 19-25 of Original show.php]

```
<?php if(metadata('item', 'Collection Name')); ?>
  <div id="collection" class="element">
    <h3><?php echo__('Collection'); ?></h3>
    <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
  </div>
<?php endif; ?>
```

[Deletion at line 43 of original show.php '<nav>']

[Deletion at line 48 of original show.php '</nav>']

Line 43

```
</div> <!--End of Primary-->
```

[Final line of sheet at 45: <?php echo foot(); ?>]
