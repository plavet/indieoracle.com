<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<footer>
<?php get_sidebar( 'footer' ); ?>
<ul class="social-icons">
	<li><a class="snfb" href="#" title="Facebook" target="_blank">Facebook</a></li>
	<li><a class="sntw" href="#" title="Twitter" target="_blank">Twitter</a></li>
	<li><a class="snb" href="#" title="Blog" target="_blank">Blog</a></li>
	<li><a class="snms" href="#" title="Myspace" target="_blank">Myspace</a></li>
	<li><a class="snyt" href="#" title="Youtube" target="_blank">Youtube</a></li>
</ul>
<div class="newsletter-box">
Subscribe to the quarterly Oracle Newsletter <input type="">
</div>

<a class="kilmulis" href="http://kilmulis.com" title="Kilmulis Design" target="_blank">Kilmulis Design &copy; 2012</a>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.roundabout.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/engine.js"></script>
</div><!--/wrap-->
</body>
</html>