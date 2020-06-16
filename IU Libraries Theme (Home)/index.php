<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

<div id="primary">
    <h2><?php echo get_theme_option('intro_head'); ?></h2>
    <p><?php echo get_theme_option('intro'); ?></p>
	</div><!-- end primary -->
<div id="secondary">

	<?php $img_id = get_theme_option('intro_image');?>
	<div style="margin-top: 3em;">
	<?php echo $this->shortcodes('[anyfile id="3f79a07a4e0f3d8e6b702c1275204672.jpg" img=true width=100% height=100%]'); ?>
	</div>
<!--    <img src="<?php echo WEB_FILES;?>/theme_uploads/<?php echo get_theme_option('intro_image'); ?>" style="width: 110%;"/>
   <img src="<?php echo WEB_FILES;?>/theme_uploads/<?php echo get_theme_option('intro_image'); ?>" style="width: 110%; margin-top: 4.5em;"/> -->
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
	    <p><?php echo $homepageText; ?></p>
	    <?php endif; ?>

    <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->
    <div class="featured first">
	<h2 class="colleft column-left-home">Featured Items</h2>
	<?php echo $this->shortcodes('[featured_items num=3]'); ?>
    </div>
	<hr></hr>
    <div class="featured">
	<h2 class="colleft column-left-home">Featured Collections</h2>
	<?php echo $this->shortcodes('[collections is_featured=1]'); ?>
	<p>Early Concept Drawing Showing a Perspective of the Herman B. Wells Library, 1962</p>     
    </div>
	<hr></hr>
    <div class="featured">
	<h2 class="colleft column-left-home">Featured Exhibits</h2>
	<?php echo $this->shortcodes('[featured_exhibits=1 ]'); ?>
     </div>
<?php echo foot(); ?>
