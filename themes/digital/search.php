<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Digital
 */

get_header(); ?>

<div class="services-slider">
    <?php echo get_field('service_slider', 11); ?>
</div>



    <?php get_sidebar('sidebar-3'); ?>


</div>
<div class="main-content-wrap">
    <div class="content-whole">

        <h2>SEARCH RESULTS</h2>
    </div>
</div>


<div class="mc-wrap">
        <div id="primary" class="blog-content content-area">
            <main id="main" class="site-main" role="main">


                <?php if ( have_posts() ) : ?>

	<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'digital' ), '<span>' . get_search_query() . '</span>' ); ?></h1><br>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php digital_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


            </main><!-- #main -->
        </div><!-- #primary -->

     <?php get_sidebar('sidebar-5'   ); ?>
</div>
<?php get_footer(); ?>


