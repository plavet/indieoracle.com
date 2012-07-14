<?php
/**
 * Template Name: Where I go page
 *
 * @package WordPress
 * @subpackage Kilmulis
 */
get_header(); ?>
<section class="where">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="headings-where">
					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>
						<h2 class="naslov_where_i_go"><?php the_title(); ?></h2>
					<?php } ?>
					</div><!--/headings-->	
					<div class="content-where">	
						<?php the_content(); ?>
					</div><!--/content-->
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>