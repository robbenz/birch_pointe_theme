<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Class
 */

?>


<?php wp_footer(); ?>

<!-- FOOTER
================================================== -->
<footer>
	<div class="container">

		<div class="col-sm-4">
			<nav>
				<ul class="list-unstyled list-inline">
					<li><a class="footer-home">Home</a></li>
					<li><a class="menu-item-20">About Us</a></li>
					<li><a class="menu-item-21">Score Card</a></li>
					<li><a class="menu-item-22">Photos</a></li>
					<li><a class="menu-item-23">Rates</a></li>
					<!-- <li><a class="menu-item-24">Contact</a></li> -->
				</ul>
			</nav>
		</div>

		<div class="col-sm-4">
			<div id="logo_footer_wrap">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/birch_logo.png" alt="Birch Pointe Golf Club | St Helen | West Branch" class="logo">
			</div>

		</div>

		<div class="col-sm-4">
			<p class="pull-right">&copy; 2018 Birch Pointe Golf Club</p>
		</div>
	</div>
	<!-- container -->
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>
