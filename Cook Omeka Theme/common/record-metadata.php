<?php if(isset(get_view()->item)): //check if this looks like an item show page ?>

<?php
//dig through the elements for display that are passed into this file
//put it all into a new array of just the elements we want
//this should let you collect the elements you want in the order you want
//follow this pattern to get more or change the order
?>
<h3 style="font-size: 114%; margin-bottom:5px;">About this item</h3> 
<table style="border-style:hidden;width:62%">
<?php foreach ($elementsForDisplay as $setName => $setElements): ?>

    <?php foreach ($setElements as $elementName => $elementInfo): ?>
	<tr>
        <td style="border-style:hidden; vertical-align:top; text-align:right; width:140px;"><b><?php echo html_escape(__($elementName)); ?></b></td>
        <td style="border-style:hidden;">
			<?php foreach ($elementInfo['texts'] as $text): ?>
            	<?php echo $text; ?><br>
        	<?php endforeach; ?>
		</td>
    </tr><!-- end element -->
    <?php endforeach; ?>
<?php endforeach; ?>
</table>

<?php else: ?>
<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set">
    <h2><?php echo html_escape(__($setName)); ?></h2>
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
        <h3><?php echo html_escape(__($elementName)); ?></h3>
        <?php foreach ($elementInfo['texts'] as $text): ?>
            <div class="element-text"><?php echo $text; ?></div>
        <?php endforeach; ?>
    </div><!-- end element -->
    <?php endforeach; ?>
</div><!-- end element-set -->
<?php endforeach; ?>

<?php endif;?>
