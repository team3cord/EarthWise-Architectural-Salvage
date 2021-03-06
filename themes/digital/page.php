<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Digital
 */

get_header(); ?>
<div class="about-slider">
    <?php echo get_field('info_slider'); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>



</div>

<div class="mc-wrap">
    <div class="blog-header-section">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div><!-- .entry-header -->

	<div id="primary" class="blog-content content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <?php get_sidebar('sidebar-5'); ?>
    <?php get_sidebar('sidebar-5'); ?>
</div>

<//?php if(function_exists('wp_simple_pagination')) {
wp_simple_pagination();
} ?>

<?php get_footer(); ?>
