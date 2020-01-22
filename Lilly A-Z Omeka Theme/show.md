Differences made to 'show.php' for Lilly A-Z Omeka Theme

Line 1: inserted extra line at beginning, so Lilly A-Z show.php begins at line 2.

Line 24: Deleted line 23 of thedaily v. 1.2 show.php

```
*Delete* <h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1> *Delete*
```

Lines 44-75 Inserted at Line 43 of thedaily v. 1.2 show.php

```
<a href="/"><div id="headerItemPages"><img alt="The Lilly Library from A to Z" style="margin-top: 0em; width: 50%;" src="/themes/thedaily/img/headerItemPages.jpg"></div></a>


<!--<a href="/~cyberdh/Lilly/"><div id="headerItemPages"><?php echo__('The Lilly Library from A to Z'); ?></div></a>
 -->
<p id="simple-pages-breadcrumbs"><a href="/">Home</a> &gt; <?php echo metadata($item, array('Dublin Core', 'Title')): ?></p>

<!-- Custom Metadata Order -->
<div class="model"><?php echo metadata($item, array('Item Type Metadata', 'Model')); ?></div>

<div class="metadata">
<div class="metadatatitle"><?php echo__('Description:   '); ?></div>
<div class="metadatatext"><?php echo metadata($item, array('Dublin Core', 'Description')); ?></div>
<div class="metadatatitle"><?php echo__('Citation:    '); ?></div>
<div class="metadatatext"><?php echo metadata($item, array('Item Type Metadata', 'Citation')): ?></div>
<div class="metadatatitle"><?php echo__('Object Dimensions:   '); ?></div>
<div class="metadatatext"><?php echo metadata($item, array('Item Type Metadata', 'Object Dimensions')); ?></div>
</br>
<div class="metadatatitle"><?php echo__('Digitization Method:   '); ?></div>
<div class="metadatatext">  <?php echo metadata($item, array('Item Type Metadata', 'Digitization Method')); ?></div>
<div class="metadatatitle"><?php echo__('Digitizer: '); ?></div>
<div class="metadatatext">  <?php echo metadata($item, array('Item Type Metadata', 'Digitizer')); ?></div>
<div class="metadatatitle"><?php echp__('DOI: '); ?></div>
<div class="metadatatext">  <?php echo metadata($item, array('Item Type Metadata', 'DOI')); ?></div>
<div class="metadatatitle"><?php echo__('View High Resolution Model:  '); ?></div>
<div class="metadatatext">  <?php echo metadata($item, array('Item Type Metadata', 'View High Resolution Model')); ?></div>
<?php if (metadata($item, array('Item Type Metadata', 'Library Collection Information')) !== null); ?>
<div class="metadatatitle"><?php echo__('Library Collection Information:  '); ?></div>
<div class="metadatatext"><?php echo metadata($item, array('Item Type Metadata', 'Library Collection Information')); ?></div>

<? php endif; ?>
  </div>
```

Line 85: Deletion of lines 53-59 of thedaily v. 1.2 show.php

```
*Delete*
<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')); ?>
<div id="item-tags" class="element">
  <h3><?php echo__('Tags'); ?></h3>
  <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif; ?>
*Delete*
```

Lines 96-100 Alters Lines 70-74 of thedaily v. 1.2 show.php

```
<!-- The following prints a citation for this item.
<div id="item-citation" class="element">
  <h3><?php echo __('Citation'); ?></h3>
  <div class="element-text"><?php echo metadata('item', 'citation', array('no-escape' => true)); ?></div>
</div>-->
```

Between Lines 101 & 102: Deletion of Lines 76-79 of thedaily v. 1.2 show.php

```
<div id="item-output-formats" class="element">
  <h3><?php echo__('Output Formats'); ?></h3>
  <div class="element-text"><?php echo output_format_list(); ?></div>
</div>
```
