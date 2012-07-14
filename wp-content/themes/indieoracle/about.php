<?php
/**
 * Template Name: About page
 *
 * @package WordPress
 * @subpackage Kilmulis
 */
get_header(); ?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="headings-about">
					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>
					<span class="ram">
					<img class="andi" src="<?php bloginfo('template_directory'); ?>/images/andi-slika.jpg" alt="">
					</span>
						<h2 class="naslov_about_me"><?php the_title(); ?></h2>
					<?php } ?>
					</div><!--/headings-->	
					<div class="content-about">	
						<?php the_content(); ?>
					</div><!--/content-->
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>