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

<a href="#">Facebook</a>
<a href="#">Twitter</a>
<a href="#">Blog</a>
<a href="#">Myspace</a>
<a href="#">Youtube</a>
<div class="newsletter-box">
Subscribe to the quarterly Oracle Newsletter <input type="">
</div>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.roundabout.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/engine.js"></script>
</body>
</html>