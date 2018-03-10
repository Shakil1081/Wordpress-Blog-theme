<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Graphic_agency
 */

?>
			<!-- FOOTER
	================================================== -->
				<footer id="footer" class="clearfix">

					<div class="container">

						<div class="col-sm-8">

							<div id="text-3" class="widget widget_text">
								<span class="widget-title">Boys Republic</span>
								<div class="textwidget">1907 Boys Republic Dr. Chino Hills, CA 91709
									<br> Telephone: (909) 628-1217 • Fax: (909) 627-9222</div>
							</div>
						</div>
						<!-- end .three-fourth -->

						<div class="col-sm-3">

							<div id="text-4" class="widget widget_text">
								<div class="textwidget">
									<img src="http://boysrepublic.org/wp-content/themes/boysrepublic/images/br_seal.png" width="97" height="91" alt="BR Seal">
								</div>
							</div>
						</div>
						<!-- end .one-fourth.last -->

					</div>
					<!-- end .container -->

				</footer>
				<footer id="footer-bottom" class="clearfix">

					<div class="container">

						<ul>
							<li>© 2014 Boys Republic</li>
							<li>
								<a href="/privacy-policy/">Privacy Policy</a>
							</li>
							<li></li>
						</ul>
					</div>
					<!-- end .container -->

				</footer>

				<!-- Bootstrap core JavaScript
    ================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
				<script>
      jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});
</script>

				
				<?php wp_footer(); ?>
</body>

</html>