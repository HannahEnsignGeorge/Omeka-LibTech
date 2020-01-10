        </div><!-- end content -->

    </div><!-- end wrap -->
    

    <footer>

        <div id="footer-text">
	<a href="https://libraries.indiana.edu/archives"><img height="60px" alt="University Archives" src="<?php echo img('archiveslockup.png');?>"  /></a><br />
            <p style="font-size:.85em; margin: 20px 0px 30px 0px;"><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>'); ?></p>
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
