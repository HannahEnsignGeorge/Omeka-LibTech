        </div><!-- end content -->

    </div><!-- end wrap -->
    

    <footer>

        <div id="footer-text">

            <p style="font-size:.85em; margin: -8px 0 auto;"><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a> and <br/><a href="http://avalonmediasystem.org/">Avalon Media System'); ?></p>
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
