        </div><!-- end content -->

    </div><!-- end wrap -->
    

    <footer>

        <div id="footer-text">
	   <a href="https://libraries.indiana.edu/wylie-house-museum"><img style="padding-bottom:15px; margin-left:-17px;" alt="Wylie House Museum"  height="100px" src="<?php echo img('wylielockup.jpg');?>" /></a><br />
            <p style="font-size:.85em; margin: -8px 0 auto;"><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>');?></p>
        </div>

        <?php fire_plugin_hook('public_footer'); ?>

    </footer><!-- end footer -->

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();        
        Omeka.moveNavOnResize();        
        Omeka.mobileMenu();        
    });
    </script>

</body>
</html>
