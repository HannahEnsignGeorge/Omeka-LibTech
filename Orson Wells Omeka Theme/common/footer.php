	  <div class="section">
	    <div class="row">
	      <div class="grid thirds well-aligned-logos">
		<div class="grid-item">
		  <img alt="IU Lilly Library logo" src="<?php echo img('logo_lilly.gif'); ?>"/>
		</div> <!-- .grid-item -->

	      	<div class="grid-item">
		  <img alt="National Recording Preservation Foundation logo" src="<?php echo img('logo_NRPF.gif'); ?>"/>
		</div> <!-- .grid-item -->

		<div class="grid-item">
		  <img alt="IU Media Digitization and Preservation Initiative" src="<?php echo img('logo_MDPI.gif'); ?>"/>
		</div> <!-- .grid-item -->
		
	      </div>   <!-- .grid -->
	    </div>   <!-- .row -->
	  </div>     <!-- .section -->

	</div> <!-- #primary -->

	<div class="section">
	  <div class="row">
	    <footer class="design-credit">	
	      Designed by <a href="http://cairril.com">Cairril.com Design & Marketing</a>
	    </footer>
	  </div>
	</div>

      </div><!-- end content -->
      
      <footer role="contentinfo">
	<div id="footer-content" class="center-div">
	</div><!-- end footer-content -->
	
	<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
	  <div class="row pad">
            <p class="tagline">Fulfilling <span>the</span> Promise</p>

            <p class="signature">
              <a href="https://www.iu.edu" class="signature-link">Indiana University</a>
            </p>
	    
            <p class="copyright">
              <a href="https://www.iu.edu/copyright/index.html">Copyright</a> &#169; 2017 <span class="line-break-small">The Trustees of <a href="https://www.iu.edu/" itemprop="url"><span itemprop="name">Indiana University</span></a></span><span class="hide-on-mobile"> | </span><span class="line-break"><a href="/privacy" id="privacy-policy-link">Privacy Notice</a> | <a href="https://accessibility.iu.edu/help" id="accessibility-link" title="Having trouble accessing this web page because of a disability? Visit this page for assistance.">Accessibility Help</a></span>
            </p>
	  </div>
	</footer>
	<script>
	  var newPrivacyURL = 'http://www.iu.edu/comments/privacy.shtml';
	  (oldPrivacyURL = document.getElementById('privacy-policy-link')) ? (oldPrivacyURL.href = newPrivacyURL) : '';
	</script>
	
      </footer>
      
    </div> <!-- #divEverything -->

    <script src="https://assets.iu.edu/web/3.x/js/iu-framework.min.js" type="text/javascript"></script>
    <script src="https://assets.iu.edu/search/3.x/search.js" type="text/javascript"></script>

  <!--   <footer role="contentinfo">

        <div id="footer-text">
            <?php echo get_theme_option('Footer Text'); ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>

        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

    </footer>end footer -->

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('.no-touchevents #primary-nav');
        ThanksRoy.mobileMenu();
    });
    </script>

</body>
</html>
